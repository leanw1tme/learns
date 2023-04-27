<?php
class SMRInstallationHelper {

    public static function installCreateMenues(){
        $menuArray = array(
            "parent_id" => 2, //1 -> survey settings, 2 -> survey menu,  3-> quickemenu, NULL -> new base menu in sidebar
            "name" => "socialmediaplugin",
            "title" => "SocialMediaPlugin",
            "position" => "side", // possible positions are "side" and "collapsed" state 3.0.0.beta-4
            "description" => "Plugin menu for social media settings"
        );
        $newMenuId = Surveymenu::staticAddMenu($menuArray);

        //Specific settings
        $menuEntryArray = array(
            "name" => "socialmediasettings",
            "title" => "ShowSocialMedia plugin settings",
            "menu_title" => "SocialMedia Settings",
            "menu_description" => "Show the settings for the social media plugin",
            "menu_icon" => "external-link-square", //it is either the fontawesome classname withot the fa- prefix, or the iconclass classname, or a src link
            "menu_icon_type" => "fontawesome", // either 'fontawesome', 'iconclass' or 'image'
            "menu_link" => "admin/pluginhelper/sa/sidebody", //the link will be parsed through yii's createURL method
            "addSurveyId" => true, //add the surveyid parameter to the url
            "addQuestionGroupId" => false, //add gid parameter to url
            "addQuestionId" => false, //add qid parameter to url
            "linkExternal" => false, //open link in a new tab/window
            "hideOnSurveyState" => null, //possible values are "active", "inactive" and null
            "permission"=> 'tokens',
            "permission_grade"=> 'update',
            "pjaxed" => true,
            "manualParams" => array(
                'plugin' => 'SocialMediaRegistration',
                'method' => 'rendersurveysettings',
            )
        );
        SurveymenuEntries::staticAddMenuEntry($newMenuId, $menuEntryArray);

        //Go to filtered participants
        $menuEntryArray = array(
            "name" => "showsocialmediaregisters",
            "title" => "Show Social Media Registers",
            "menu_title" => "Registration through social media",
            "menu_description" => "Show all registration done by social media registration",
            "menu_icon" => "facebook", //it is either the fontawesome classname withot the fa- prefix, or the iconclass classname, or a src link
            "menu_icon_type" => "fontawesome", // either 'fontawesome', 'iconclass' or 'image'
            "menu_link" => "admin/pluginhelper/sa/sidebody", //the link will be parsed through yii's createURL method
            "addSurveyId" => true, //add the surveyid parameter to the url
            "addQuestionGroupId" => false, //add gid parameter to url
            "addQuestionId" => false, //add qid parameter to url
            "linkExternal" => false, //open link in a new tab/window
            "hideOnSurveyState" => null, //possible values are "active", "inactive" and null
            "pjaxed" => true,
            "permission"=> 'tokens',
            "permission_grade"=> 'update',
            "manualParams" => array(
                'plugin' => 'SocialMediaRegistration',
                'method' => 'listLogins',
            )
        );
        SurveymenuEntries::staticAddMenuEntry($newMenuId, $menuEntryArray);
    }

    public static function installCreateTables(){
        
        $oDB = Yii::app()->db;

        $sCollation = '';
        if (Yii::app()->db->driverName == 'mysql' || Yii::app()->db->driverName == 'mysqli') {
            $sCollation = "COLLATE 'utf8mb4_bin'";
        }
        if (Yii::app()->db->driverName == 'sqlsrv'
            || Yii::app()->db->driverName == 'dblib'
            || Yii::app()->db->driverName == 'mssql') {

            $sCollation = "COLLATE SQL_Latin1_General_CP1_CS_AS";
        }

        $oTransaction = $oDB->beginTransaction();
        try{
            $oDB->createCommand()->createTable('{{socialMediaLogins}}', array(
                'id' => 'pk',
                'sid' => 'integer NOT NULL',
                'tid' => 'integer NOT NULL',
                'token' => "string(35) {$sCollation}",
                'socialType' => 'string DEFAULT NULL',
                'socialKey' => 'string DEFAULT NULL',
            ));

            $oDB->createCommand()->createTable('{{socialMediaActivatedSurveys}}', array(
                'sid' => 'integer NOT NULL',
                'onlySMR' => 'integer DEFAULT 0',
                'sendMail' => 'integer DEFAULT 1',
                'storeData' => 'integer DEFAULT 0',
            ));
            $oTransaction->commit();
            return true;
        } catch(Exception $e) {
            $oTransaction->rollback();
            throw new CHttpException(500, $e->getMessage());
        }
    }

    public static function uninstallRemoveMenues(){
        Surveymenu::staticRemoveMenu('socialmediaplugin', true);
    }

    public static function uninstallRemoveTables(){
        $oDB = Yii::app()->db;
        $oTransaction = $oDB->beginTransaction();
        try{
            $oDB->createCommand()->dropTable('{{socialMediaLogins}}');
            $oDB->createCommand()->dropTable('{{socialMediaActivatedSurveys}}');
            $oTransaction->commit();
            return true;
        } catch(Exception $e) {
            $oTransaction->rollback();
            throw new CHttpException(500, $e->getMessage());
        }
    }
}