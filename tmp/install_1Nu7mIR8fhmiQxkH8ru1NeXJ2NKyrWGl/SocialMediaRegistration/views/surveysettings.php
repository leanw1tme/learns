<?php
/**
 *
 *
 *
*/
?>

<div class="container-fluid" id="in_survey_common">
    <div class="row">
        <div class="col-sm-12 h3 pagetitle">Social Media Registration plugin - Settings </div>
    </div>
    <?php if (!$isActivated) {
    ?>
    <div class="row">
        <div class="col-sm-4">Activate SocialMedia registration for this survey</div>
        <div class="col-sm-8">
            <button class="btn btn-default" id="socialmediaplugin__inactive--activatethissurvey">Activate</button>
        </div>
    </div>
    <?php
    } else {
    ?>
    <div class="row">
        <div class="col-sm-4">Only allow SocialMedia registration for this survey</div>
        <div class="col-sm-8">
        <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array(
                'name' => 'socialmediaplugin__active--onlyallowsm',
                'value'=> $isOnlyAllowSocialMedia,
                'onLabel'=>gT('Yes'),
                'offLabel'=>gT('No')
                ));
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">Send registration email </div>
        <div class="col-sm-8">
        <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array(
                'name' => 'socialmediaplugin__active--sendRegistrationEmail',
                'value'=> $sendRegistrationEmail,
                'onLabel'=>gT('Yes'),
                'offLabel'=>gT('No')
                ));
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">Store arbitrary data </div>
        <div class="col-sm-8">
        <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array(
                'name' => 'socialmediaplugin__active--storeArbitraryData',
                'value'=> $storeArbitraryData,
                'onLabel'=>gT('Yes'),
                'offLabel'=>gT('No')
                ));
            ?>
        </div>
    </div>
    <?php
    } ?>

</div>

<?php
App()->getClientScript()->registerScript('SocialMediaPlugin', "
        $('#socialmediaplugin__inactive--activatethissurvey').on('click', function(e){
            console.ls.log(e);
            e.preventDefault();
            $.ajax({
                url: '".$activateForThisSurveyUrl."',
                method: 'POST',
                success: function(data){console.log(data);location.reload();},
                error: function(){console.ls.error(arguments);}
            });
        });
        var runAjax = function(url, value){
            return $.ajax({
                url: url,
                data: {value: value},
                method: 'POST',
                success: function(data){
                    var alertClass = (data.success?'bg-success':'bg-error');
                    console.log(data, alertClass);
                    LS.LsGlobalNotifier.create(data.message, 'well-lg text-center '+alertClass);
                },
                error: function(){console.ls.error(arguments);}
            });
        };

        $('#socialmediaplugin__active--onlyallowsm').on('change', function(e){
            console.ls.log(e);
            var value = $(this).prop('checked')?1:0;
            var self = this;
            $(this).prop('disabled', true);
            e.preventDefault();
            runAjax('".$onlyAllowSocialmediaRegistrationUrl."', value).then(function(){
                $(self).removeAttr('disabled');
            });
        });
        $('#socialmediaplugin__active--sendRegistrationEmail').on('change', function(e){
            console.ls.log(e);
            var value = $(this).prop('checked')?1:0;
            var self = this;
            $(this).prop('disabled', true);
            e.preventDefault();
            runAjax('".$sendRegistrationEmailUrl."', value).then(function(){
                $(self).removeAttr('disabled');
            });
        });
        $('#socialmediaplugin__active--storeArbitraryData').on('change', function(e){
            console.ls.log(e);
            var value = $(this).prop('checked')?1:0;
            var self = this;
            $(this).prop('disabled', true);
            e.preventDefault();
            runAjax('".$storeArbitraryDataUrl."', value).then(function(){
                $(self).removeAttr('disabled');
            });
        });
    ", LSYii_ClientScript::POS_POSTSCRIPT);
