<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BookMaster;

/**
 * BookMasterSearch represents the model behind the search form about `app\models\BookMaster`.
 */
class BookMasterSearch extends BookMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accNumber', 'bookTitle', 'authorName', 'PublisherName', 'status'], 'safe'],
            [['SubID', 'pages', 'price'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = BookMaster::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'SubID' => $this->SubID,
            'pages' => $this->pages,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'accNumber', $this->accNumber])
            ->andFilterWhere(['like', 'bookTitle', $this->bookTitle])
            ->andFilterWhere(['like', 'authorName', $this->authorName])
            ->andFilterWhere(['like', 'PublisherName', $this->PublisherName])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
