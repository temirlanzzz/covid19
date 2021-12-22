<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\record;

/**
 * SearchRecord represents the model behind the search form of `frontend\models\record`.
 */
class SearchRecord extends record
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'cname', 'disease_code'], 'safe'],
            [['total_deaths', 'total_patients'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = record::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'total_deaths' => $this->total_deaths,
            'total_patients' => $this->total_patients,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'cname', $this->cname])
            ->andFilterWhere(['like', 'disease_code', $this->disease_code]);

        return $dataProvider;
    }
}
