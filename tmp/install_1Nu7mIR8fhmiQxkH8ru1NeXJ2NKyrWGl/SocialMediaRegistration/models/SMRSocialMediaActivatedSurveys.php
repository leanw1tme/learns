<?php

/**
 * Controller model for social media activated surveys
 * 
 * @property integer sid
 * @property integer onlySMR
 * @property integer sendMail
 * @property integer storeData
 */

class SMRSocialMediaActivatedSurveys extends LSActiveRecord {
    /** @inheritdoc */
    public function tableName()
    {
        return '{{socialMediaActivatedSurveys}}';
    }

    /** @inheritdoc */
    public function primaryKey()
    {
        return 'sid';
    }
     /**
     * @inheritdoc
     */
    public static function model($className = __CLASS__)
    {
        /** @var self $model */
        $model = parent::model($className);
        return $model;
    }
}