<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $userID
 * @property string|null $userName
 * @property string|null $userType
 * @property string|null $password
 *
 * @property IssueReturn[] $issueReturns
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userName'], 'string', 'max' => 50],
            [['userType'], 'string', 'max' => 10],
            [['password'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'userID' => 'User ID',
            'userName' => 'User Name',
            'userType' => 'User Type',
            'password' => 'Password',
        ];
    }

    /**
     * Gets query for [[IssueReturns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIssueReturns()
    {
        return $this->hasMany(IssueReturn::className(), ['userID' => 'userID']);
    }
}
