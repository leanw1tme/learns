<?php

/**
 * Controller model for social media login
 * 
 * @property integer id 
 * @property integer sid
 * @property integer tid
 * @property string token
 * @property string socialType
 * @property string socialKey
 */

class SMRSocialMediaLogin extends LSActiveRecord {

    /** @var int $sid */
    protected static $sid = 0;

    /**
     * Sets the survey ID for the next model
     *
     * @static
     * @access public
     * @param int $sid
     * @return void
     */
     public static function sid($sid)
     {
         self::$sid = (int) $sid;
     }

    /** @inheritdoc */
    public function tableName()
    {
        return '{{socialMediaLogins}}';
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

    /** @inheritdoc */
    public function relations()
    {
        return array(
            'survey'  => array(self::BELONGS_TO, 'Survey', array('sid')),
            'participant'   => array(self::BELONGS_TO, 'TokenDynamic', array('token' => 'token'), 'together' => true)
        );
    }
    /**
     * @return array
     */
     public function getColums()
     {
         // TODO should be static
         $cols = array(
             array(
                 "name" => 'buttons',
                 "type" => 'raw',
                 "header" => gT("Action")
             ),
             array(
                 "name" => 'token',
                 "header" => gT("Token")
             ),
             array(
                 "name" => 'participant.firstname',
                 "header" => gT("First name")
             ),
             array(
                 "name" => 'participant.lastname',
                 "header" => gT("Last name")
             ),
             array(
                 "name" => 'participant.email',
                 "header" => gT("Email")
             ),
             array(
                 "name" => 'socialType',
                 "header" => 'Network'
             ),
         );
         return $cols;
     }
 
     /** @inheritdoc */
     public function search()
     {
         // @todo Please modify the following code to remove attributes that should not be searched.
         $pageSize = Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']);
         $criteria = new CDbCriteria;
         $criteria->compare('sid', self::$sid);
         $criteria->with = 'participant';
         return new CActiveDataProvider($this, array(
             'criteria'=>$criteria,
             'pagination' => array(
                 'pageSize' => $pageSize
             )
         ));
     }
}