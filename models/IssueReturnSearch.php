<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IssueReturn;

/**
 * IssueReturnSearch represents the model behind the search form about `app\models\IssueReturn`.
 */
class IssueReturnSearch extends IssueReturn
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transID', 'userID', 'OverdueDays'], 'integer'],
            [['AccNumber', 'IssueDate', 'ExpRetDate', 'ActRetDate'], 'safe'],
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
        $query = IssueReturn::find();

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
            'transID' => $this->transID,
            'userID' => $this->userID,
            'IssueDate' => $this->IssueDate,
            'ExpRetDate' => $this->ExpRetDate,
            'ActRetDate' => $this->ActRetDate,
            'OverdueDays' => $this->OverdueDays,
        ]);

        $query->andFilterWhere(['like', 'AccNumber', $this->AccNumber]);

        return $dataProvider;
    }
}
