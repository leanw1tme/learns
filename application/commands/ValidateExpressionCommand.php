<?php

class ValidateExpressionCommand extends CConsoleCommand
{
    /**
     * @param int $surveyId
     * @param string $lang
     * @param string $type 'invitation' 'reminder' 'registration' 'confirmation' 'admin_notification' 'admin_detailed_notification'
     */
    public function actionEmail($surveyId, $lang, $type)
    {
        $_GET['type'] = $type;

        Yii::import('application.controllers.admin.ExpressionValidate', true);
        Yii::import('application.helpers.expressions.em_manager_helper', true);
        Yii::import('application.helpers.replacements_helper', true);
        Yii::import('application.helpers.common_helper', true);

        $c = new ExpressionValidate();
        $_SESSION['LEMsid'] = $surveyId;
        $c->email($surveyId, $lang);
    }
}
