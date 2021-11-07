<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Subjects".
 *
 * @property int $subID
 * @property string|null $subName
 *
 * @property BookMaster[] $bookMasters
 */
class Subjects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Subjects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subName'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subID' => 'Sub ID',
            'subName' => 'Sub Name',
        ];
    }

    /**
     * Gets query for [[BookMasters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookMasters()
    {
        return $this->hasMany(BookMaster::className(), ['SubID' => 'subID']);
    }
}
