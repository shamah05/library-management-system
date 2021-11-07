<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "IssueReturn".
 *
 * @property int $transID
 * @property int|null $userID
 * @property string|null $AccNumber
 * @property string|null $IssueDate
 * @property string|null $ExpRetDate
 * @property string|null $ActRetDate
 * @property int|null $OverdueDays
 *
 * @property BookMaster $accNumber
 * @property Users $user
 */
class IssueReturn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'IssueReturn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userID', 'OverdueDays'], 'default', 'value' => null],
            [['userID', 'OverdueDays'], 'integer'],
            [['IssueDate', 'ExpRetDate', 'ActRetDate'], 'safe'],
            [['AccNumber'], 'string', 'max' => 10],
            [['AccNumber'], 'exist', 'skipOnError' => true, 'targetClass' => BookMaster::className(), 'targetAttribute' => ['AccNumber' => 'accNumber']],
            [['userID'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['userID' => 'userID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'transID' => 'Trans ID',
            'userID' => 'User ID',
            'AccNumber' => 'Acc Number',
            'IssueDate' => 'Issue Date',
            'ExpRetDate' => 'Exp Ret Date',
            'ActRetDate' => 'Act Ret Date',
            'OverdueDays' => 'Overdue Days',
        ];
    }

    /**
     * Gets query for [[AccNumber]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccNumber()
    {
        return $this->hasOne(BookMaster::className(), ['accNumber' => 'AccNumber']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['userID' => 'userID']);
    }
}
