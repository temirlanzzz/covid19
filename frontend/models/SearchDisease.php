<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Disease;

/**
 * SearchDisease represents the model behind the search form of `frontend\models\Disease`.
 */
class SearchDisease extends Disease
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disease_code', 'pathogen', 'description'], 'safe'],
            [['id'], 'integer'],
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
        $query = Disease::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'disease_code', $this->disease_code])
            ->andFilterWhere(['like', 'pathogen', $this->pathogen])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
