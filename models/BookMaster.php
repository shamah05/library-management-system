<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookMaster".
 *
 * @property string $accNumber
 * @property string|null $bookTitle
 * @property int|null $SubID
 * @property string|null $authorName
 * @property string|null $PublisherName
 * @property int $pages
 * @property int|null $price
 * @property string|null $status
 *
 * @property IssueReturn[] $issueReturns
 * @property Subjects $sub
 */
class BookMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookMaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['accNumber'], 'required'],
            [['SubID', 'price'], 'default', 'value' => null],
            [['SubID', 'price'], 'integer'],
            [['accNumber'], 'string', 'max' => 10],
            [['bookTitle'], 'string', 'max' => 100],
            [['authorName', 'PublisherName'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 1],
            [['accNumber'], 'unique'],
            [['SubID'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['SubID' => 'subID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'accNumber' => 'Acc Number',
            'bookTitle' => 'Book Title',
            'SubID' => 'Sub ID',
            'authorName' => 'Author Name',
            'PublisherName' => 'Publisher Name',
            'pages' => 'Pages',
            'price' => 'Price',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[IssueReturns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIssueReturns()
    {
        return $this->hasMany(IssueReturn::className(), ['AccNumber' => 'accNumber']);
    }

    /**
     * Gets query for [[Sub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSub()
    {
        return $this->hasOne(Subjects::className(), ['subID' => 'SubID']);
    }
}
