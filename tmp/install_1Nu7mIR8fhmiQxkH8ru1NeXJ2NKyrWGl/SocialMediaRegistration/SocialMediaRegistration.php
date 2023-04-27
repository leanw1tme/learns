<?php

/**
 * Registration through social Media accounts
 *
 * @since 2017-08-07
 * @author Markus Flür
 */

 
spl_autoload_register(function ($class_name) {
    if(preg_match("/^SMR.*/", $class_name)){
        if(file_exists(__DIR__.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$class_name . '.php')){
            include __DIR__.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$class_name . '.php';
        } else if(file_exists(__DIR__.DIRECTORY_SEPARATOR.'helper'.DIRECTORY_SEPARATOR.$class_name . '.php')){
            include __DIR__.DIRECTORY_SEPARATOR.'helper'.DIRECTORY_SEPARATOR.$class_name . '.php';
        }
    }
});

class SocialMediaRegistration extends PluginBase
{
    protected static $description = 'Add social media registration for participants';
    protected static $name = 'SocialMediaRegistration';

    protected $storage = 'DbStorage';
    protected $settings = array(
        'info' => array(
            'type' => 'info',
            'content' => '<div class="well col-sm-8"><span class="fa fa-info-circle"></span>&nbsp;&nbsp;If you apply an API key the method will be activated for your customers.</div>'
        ),
        'googleClientId' => array(
            'type' => 'string',
            'label' => 'Google Client-ID',
            'default' => '',
            'help' => 'Add Google login for your participants'
        ),
        'facebookAppId' => array(
            'type' => 'string',
            'label' => 'Facebook App ID',
            'default' => '',
            'help' => 'Add Facebook login for your participants'
        ),
        'twitterApiKey' => array(
            'type' => 'string',
            'label' => 'Twitter App ID',
            'default' => '',
            'help' => 'Add Twitter login for your participants, you will need to put in both values'
        ),
        'githubClientId' => array(
            'type' => 'string',
            'label' => 'GitHub Client ID',
            'default' => '',
            'help' => 'Add GitHub login for your participants, you will need to put in both values'
        ),
        'linkedinApiKey' => array(
            'type' => 'string',
            'label' => 'LinkedIn API key',
            'default' => '',
            'help' => 'Add LinkedIn login for your participants'
        ),
        'microsoftApiKey' => array(
            'type' => 'string',
            'label' => 'Microsoft API key',
            'default' => '',
            'help' => 'Add Microsoft One-Login login for your participants'
        ),
        'instagramApiKey' => array(
            'type' => 'string',
            'label' => 'Instagram API key',
            'default' => '',
            'help' => 'Add instagram login for your participants'
        ),
        'vkontakteApiKey' => array(
            'type' => 'string',
            'label' => 'VK API key',
            'default' => '',
            'help' => 'Add VK login for your participants'
        ),
    );

    public function init()
    {
        $this->subscribe('newDirectRequest');
    
        $this->subscribe('beforeRegisterForm');
        $this->subscribe('beforeRegister');
        
        $this->subscribe('beforeTokenEmail');
        
        $this->subscribe('beforeActivate');
        $this->subscribe('beforeDeactivate');
    }


    /**
     * Listen to direct requests and relay them to the correct function
     *
     * @return void
     */
    public function newDirectRequest() {
        $request = $this->api->getRequest();
        $oEvent = $this->getEvent();

        if($oEvent->get('target') !== 'SocialMediaRegistration') { return; }

        $action = $oEvent->get('function');
        return call_user_func([$this, $action], $oEvent, $request);
    }

    /**
     * Append the social media buttons to the registration form
     */
    public function beforeRegisterForm()
    {
        $event = $this->getEvent();
        $request = $this->api->getRequest();
        $surveyid = $event->get('surveyid');

        $oSocialMediaActivatedSurveys = SMRSocialMediaActivatedSurveys::model()->findByPk($surveyid);
        if($oSocialMediaActivatedSurveys != null) {
            $this->registerCss('./assets/SMRCSS.css');

            $this->prepareHelloJS();
            $lang = $event->get('lang');
            $aRegistersErrors = $event->get('aRegistersErrors');
    
            $appendForm = "<div id='SocialMediaPlugin_contentrow' class='row'>";
            $this->appendProviders($appendForm);
            $appendForm .= "</div>";
            if($oSocialMediaActivatedSurveys->onlySMR) {
               $this->registerCss('./assets/removeRegularRegister.css');
            } 

            $event->append('registerForm', array('append' => true, 'formAppend' => $appendForm));
            
        }

    }

    public function beforeRegister()
    {
        $event = $this->getEvent();
        $request = $this->api->getRequest();
        $surveyid = $event->get('surveyid');
        $settings = $this->getPluginSettings(true);
        $socialMediaLogin = $request->getPost('social_media_login', null);
        $socialMediaLoginKey = $request->getPost('social_media_login_key', null);
        $isSocialMediaLogin = $socialMediaLogin != null && $socialMediaLoginKey != null;
        if($isSocialMediaLogin) {

            $SMRSocialMediaLogin = SMRSocialMediaLogin::model()->findByAttributes([
                'socialType' => $socialMediaLogin,
                'socialKey' => $socialMediaLoginKey
            ]);
                
            if ($SMRSocialMediaLogin !== null) {
                $event->set('iTokenId', $SMRSocialMediaLogin->token);
                return;
            }
        }

        $event->set('directLogin', true);
    }

    public function beforeTokenEmail()
    {
        $event = $this->getEvent();
        $request = $this->api->getRequest();
        $surveyid = $event->get('survey');
        $aToken = $event->get('token');
        $oToken = TokenDynamic::model($surveyid)->findByPk($aToken['tid']);
        
        $socialMediaLogin = $request->getPost('social_media_login', null);
        $socialMediaLoginKey = $request->getPost('social_media_login_key', null);
        $isSocialMediaLogin = $socialMediaLogin != null && $socialMediaLoginKey != null;

        if($isSocialMediaLogin) {

            $SMRSocialMediaLogin = SMRSocialMediaLogin::model()->findByAttributes([
                'token' => $aToken['token']
            ]);

            if ($SMRSocialMediaLogin == null) {
                $SMRSocialMediaLogin = new SMRSocialMediaLogin();
                $SMRSocialMediaLogin->sid = $surveyid;
                $SMRSocialMediaLogin->tid = $aToken['tid'];
                $SMRSocialMediaLogin->token = $aToken['token'];
                $SMRSocialMediaLogin->socialType = $_POST['social_media_login'];
                $SMRSocialMediaLogin->socialKey = $_POST['social_media_login_key'];
                $SMRSocialMediaLogin->save();
                
            } 

            $oSocialMediaActivatedSurveys = SMRSocialMediaActivatedSurveys::model()->findByPk($surveyid);
            $sendEmail = ($oSocialMediaActivatedSurveys != null) ? $oSocialMediaActivatedSurveys->sendMail : true;
            $event->set('send', $sendEmail);
        }
    }

    public function appendProviders(&$appendForm) 
    {
        if ($this->get('facebookAppId') != '') {
            $appendForm.=$this->createButton('facebook', 'fa-facebook', 'Login with Facebook');
        }
        if ($this->get('googleClientId') != '') {
            $appendForm.=$this->createButton('google', 'fa-google', 'Login with Google');
        }
        if ($this->get('githubClientId') != '') {
            $appendForm.=$this->createButton('github', 'fa-github', 'Login with GitHub');
        }
        if ($this->get('linkedinApiKey') != '') {
            $appendForm.=$this->createButton('linkedin', 'fa-linkedin', 'Login with LinkedIn');
        }
        if ($this->get('microsoftApiKey') != '') {
            $appendForm.=$this->createButton('windows', 'fa-windows', 'Login with WindowsLive');
        }
        if ($this->get('instagramApiKey') != '') {
            $appendForm.=$this->createButton('instagram', 'fa-instagram', 'Login with Instagram');
        }
        if ($this->get('twitterApiKey') != '') {
            $appendForm.=$this->createButton('twitter', 'fa-twitter', 'Login with Twitter');
        }
        if ($this->get('vkontakteApiKey') != '') {
            $appendForm.=$this->createButton('vk', 'fa-vk', 'Login with VK');
        }
    }


    protected function createButton($network, $iconClass, $text) {
        $script = "$('#".$network."-signin-button').on('click', function(e){e.preventDefault(); hello('".$network."').login({scope: 'email'})});";
        Yii::app()->clientScript->registerScript($network.'-login', $script, LSYii_ClientScript::POS_POSTSCRIPT);

        return ''
        .'<div class="col-lg-4 col-sm-6 col-xs-12">'
            . '<button class="btn btn-default btn-block smr--fixlineheight" id="'.$network.'-signin-button">'
                .' <i class="pull-left fa '.$iconClass.' fa-2x"></i>'
                . $text
            .'</button>'
        . '</div>';
    }
    
    public function activateForSurvey($oEvent, $request)
    {
        $iSurveyId = (int) $request->getParam('surveyId', null);

        $oSurvey = Survey::model()->findByPk($iSurveyId);
        if (!$oSurvey->hasTokensTable) {
            return $this->createJSONResponse(false ,'No participant table created. Please create a participant table fiirst.');
        }
        
        $oSocialMediaActivatedSurveys = SMRSocialMediaActivatedSurveys::model()->findByPk($iSurveyId);
        if($oSocialMediaActivatedSurveys != null) {
            return $this->createJSONResponse(false ,'Already activated for social-media registration.');
        }
        
        $oSocialMediaActivatedSurveys = new SMRSocialMediaActivatedSurveys();
        $oSocialMediaActivatedSurveys->sid = $iSurveyId;
        if($oSocialMediaActivatedSurveys->save() != true) {
            return $this->createJSONResponse(false ,'Could not activate survey for social-media registration.', ['report' => $oSocialMediaActivatedSurveys->getErrors()]);
        }

        return $this->createJSONResponse(true ,'Survey activated for social-media registration.');
    }

    public function onlyAllowSocialmediaRegistrationUrl($oEvent, $request)
    {
        $iSurveyId = (int) $request->getParam('surveyId', null);
        $value = intval($request->getPost('value'));
        
        $oSocialMediaActivatedSurveys = SMRSocialMediaActivatedSurveys::model()->findByPk($iSurveyId);
        if($oSocialMediaActivatedSurveys == null) {
            return $this->createJSONResponse(false ,'Survey not activated for social-media registration. Could not set option.');
        }

        $oSocialMediaActivatedSurveys->onlySMR = $value;
        if($oSocialMediaActivatedSurveys->save() != true) {
            return $this->createJSONResponse(false ,'Could not activate option for this survey.', ['report' => $oSocialMediaActivatedSurveys->getErrors()]);
        }

        return $this->createJSONResponse(true ,'Only allow social-media registration '.($value==0?'deactivated':'activated').' for this survey.');
    }

    public function sendRegistrationEmailUrl($oEvent, $request)
    {
        $iSurveyId = (int) $request->getParam('surveyId', null);
        $value = intval($request->getPost('value'));
        
        $oSocialMediaActivatedSurveys = SMRSocialMediaActivatedSurveys::model()->findByPk($iSurveyId);
        if($oSocialMediaActivatedSurveys == null) {
            return $this->createJSONResponse(false ,'Survey not activated for social-media registration. Could not set option.');
        }

        $oSocialMediaActivatedSurveys->sendMail = $value;
        if($oSocialMediaActivatedSurveys->save() != true) {
            return $this->createJSONResponse(false ,'Could not activate option for this survey', ['report' => $oSocialMediaActivatedSurveys->getErrors()]);
        }

        return $this->createJSONResponse(true ,'Sending registration emails '.($value==0?'deactivated':'activated').' for this survey.');
    }

    public function storeArbitraryData($oEvent, $request)
    {
        $iSurveyId = (int) $request->getParam('surveyId', null);
        $value = intval($request->getPost('value'));
        
        $oSocialMediaActivatedSurveys = SMRSocialMediaActivatedSurveys::model()->findByPk($iSurveyId);
        if($oSocialMediaActivatedSurveys == null) {
            return $this->createJSONResponse(false ,'Survey not activated for social-media registration. Could not set option.');
        }

        $oSocialMediaActivatedSurveys->storeData = $value;
        if($oSocialMediaActivatedSurveys->save() != true) {
            return $this->createJSONResponse(false ,'Could not activate option for this survey.', ['report' => $oSocialMediaActivatedSurveys->getErrors()]);
        }

        return $this->createJSONResponse(true ,($value==0?'Not storing':'Storing').' arbitrary data for this survey.');
    }

    public function listLogins($surveyId)
    {
        if (Yii::app()->getRequest()->getQuery('pageSize')) {
            Yii::app()->user->setState('pageSize', (int) Yii::app()->getRequest()->getQuery('pageSize'));
        }
        $iPageSize = Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']);
        SMRSocialMediaLogin::sid($surveyId);
        TokenDynamic::sid($surveyId);
        SurveyDynamic::sid($surveyId);
        $aData = [
            'model' => SMRSocialMediaLogin::model(),
            'pageSize' => $iPageSize,
        ];

        return $this->renderPartial('listLogins', $aData, true);

    }

    public function rendersurveysettings($surveyId)
    {
        $oSocialMediaActivatedSurveys = SMRSocialMediaActivatedSurveys::model()->findByPk($surveyId);

        $isActivated = $oSocialMediaActivatedSurveys == null ? false : true;
        if($oSocialMediaActivatedSurveys == null) {
            $isOnlyAllowSocialMedia = false;
            $sendRegistrationEmail = true;
            $storeArbitraryData = false;
        } else {
            $isOnlyAllowSocialMedia = $oSocialMediaActivatedSurveys->onlySMR;
            $sendRegistrationEmail = $oSocialMediaActivatedSurveys->sendMail;
            $storeArbitraryData = $oSocialMediaActivatedSurveys->storeData;
        }

        $aData = array(
            'surveyId' => $surveyId,
            'isActivated' => $isActivated,
            'isOnlyAllowSocialMedia' => $isOnlyAllowSocialMedia,
            'sendRegistrationEmail' => $sendRegistrationEmail,
            'storeArbitraryData' => $storeArbitraryData,
            'activateForThisSurveyUrl' => Yii::app()->createUrl('/plugins/direct/plugin/SocialMediaRegistration/function/activateForSurvey', ['surveyId' => $surveyId]),
            'onlyAllowSocialmediaRegistrationUrl' => Yii::app()->createUrl('/plugins/direct/plugin/SocialMediaRegistration/function/onlyAllowSocialmediaRegistrationUrl', ['surveyId' => $surveyId]),
            'sendRegistrationEmailUrl' => Yii::app()->createUrl('/plugins/direct/plugin/SocialMediaRegistration/function/sendRegistrationEmailUrl', ['surveyId' => $surveyId]),
            'storeArbitraryDataUrl' => Yii::app()->createUrl('/plugins/direct/plugin/SocialMediaRegistration/function/storeArbitraryData', ['surveyId' => $surveyId]),
        );
        return $this->renderPartial('surveysettings', $aData, true);
    }

    /**
     * add menues on activating the plugin
     *
     * @return void
     */
    public function beforeActivate()
    {
        SMRInstallationHelper::installCreateMenues();
        SMRInstallationHelper::installCreateTables();
    }

    /**
     * remove menues on deactivating the plugin
     *
     * @return void
     */
    public function beforeDeactivate()
    {
        SMRInstallationHelper::uninstallRemoveMenues();
        SMRInstallationHelper::uninstallRemoveTables();
    }

    protected function prepareHelloJS()
    {
        $settings = $this->getPluginSettings(true);
        //googleClientId
        //facebookAppId
        //githubClientId
        //githubClientSecret
        //linkedinApiKey

        $this->registerScript("assets/hello.min.js", CClientScript::POS_HEAD);

        $script = ""
        ."
        hello.init({
            ".($settings['facebookAppId']['current'] != '' ? "facebook : '".$settings['facebookAppId']['current']."'," : "")."
            ".($settings['instagramApiKey']['current'] != '' ? "instagram : '".$settings['instagramApiKey']['current']."'," : "")."
            ".($settings['googleClientId']['current'] != '' ? "google : '".$settings['googleClientId']['current']."'," : "")."
            ".($settings['twitterApiKey']['current'] != '' ? "twitter : '".$settings['twitterApiKey']['current']."'," : "")."
            ".($settings['microsoftApiKey']['current'] != '' ? "windows : '".$settings['microsoftApiKey']['current']."'," : "")."
            ".($settings['githubClientId']['current'] != '' ? "github : '".$settings['githubClientId']['current']."'," : "")."
            ".($settings['linkedinApiKey']['current'] != '' ? "linkedin : '".$settings['linkedinApiKey']['current']."'," : "")."
            ".($settings['vkontakteApiKey']['current'] != '' ? "vk : '".$settings['vkontakteApiKey']['current']."'," : "")."
        });"
        ."";
        Yii::app()->clientScript->registerScript('helloScript', $script, CClientScript::POS_BEGIN);
        $this->registerScript("assets/hellologin.js", CClientScript::POS_END);
    }

    protected function createJSONResponse($success, $message, $data = []) 
    {
        header('Content-Type: application/json');

        echo json_encode([
            'success' => $success,
            'message' => $message,
            'data' => $data
        ]);
        return $success;
    }

    protected function registerCss($relativePathToCss, $parentPlugin=null)
    {
        $parentPlugin = $parentPlugin===null ? get_class($this) : $parentPlugin;
        $pathPossibilities = [
            YiiBase::getPathOfAlias('userdir').'/plugins/'.$parentPlugin.'/'.$relativePathToCss,
            YiiBase::getPathOfAlias('webroot').'/plugins/'.$parentPlugin.'/'.$relativePathToCss,
            Yii::app()->getBasePath().'/application/core/plugins/'.$parentPlugin.'/'.$relativePathToCss
        ];
        $cssToRegister = null;
        if (file_exists(YiiBase::getPathOfAlias('userdir').'/plugins/'.$parentPlugin.'/'.$relativePathToCss)) {
            $cssToRegister = Yii::app()->getAssetManager()->publish(
                YiiBase::getPathOfAlias('userdir').'/plugins/'.$parentPlugin.'/'.$relativePathToCss
            );
        } elseif (file_exists(YiiBase::getPathOfAlias('webroot').'/plugins/'.$parentPlugin.'/'.$relativePathToCss)) {
            $cssToRegister = Yii::app()->getAssetManager()->publish(
                YiiBase::getPathOfAlias('webroot').'/plugins/'.$parentPlugin.'/'.$relativePathToCss
            );
        } elseif (file_exists(Yii::app()->getBasePath().'/core/plugins/'.$parentPlugin.'/'.$relativePathToCss)) {
            $cssToRegister = Yii::app()->getAssetManager()->publish(
                Yii::app()->getBasePath().'/core/plugins/'.$parentPlugin.'/'.$relativePathToCss
            );
        }
        Yii::app()->getClientScript()->registerCssFile($cssToRegister);
    }

    protected function registerScript($relativePathToScript, $pos=LSYii_ClientScript::POS_BEGIN)
    {
        $parentPlugin = get_class($this);

        $scriptToRegister = null;
        if (file_exists(YiiBase::getPathOfAlias('userdir').'/plugins/'.$parentPlugin.'/'.$relativePathToScript)) {
            $scriptToRegister = Yii::app()->getAssetManager()->publish(
                YiiBase::getPathOfAlias('userdir').'/plugins/'.$parentPlugin.'/'.$relativePathToScript
            );
        } elseif (file_exists(YiiBase::getPathOfAlias('webroot').'/plugins/'.$parentPlugin.'/'.$relativePathToScript)) {
            $scriptToRegister = Yii::app()->getAssetManager()->publish(
                YiiBase::getPathOfAlias('webroot').'/plugins/'.$parentPlugin.'/'.$relativePathToScript
            );
        } elseif (file_exists(Yii::app()->getBasePath().'/core/plugins/'.$parentPlugin.'/'.$relativePathToScript)) {
            $scriptToRegister = Yii::app()->getAssetManager()->publish(
                Yii::app()->getBasePath().'/core/plugins/'.$parentPlugin.'/'.$relativePathToScript
            );
        }
        Yii::app()->getClientScript()->registerScriptFile($scriptToRegister, $pos);
    }

}
