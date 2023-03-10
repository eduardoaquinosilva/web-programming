<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Features;

/**
 * FeaturesSearch represents the model behind the search form of `app\models\Features`.
 */
class FeaturesSearch extends Features
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idfeatures'], 'integer'],
            [['titulo', 'subtitulo', 'desc1', 'desc2', 'desc3', 'desc4'], 'safe'],
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
        $query = Features::find();

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
            'idfeatures' => $this->idfeatures,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'subtitulo', $this->subtitulo])
            ->andFilterWhere(['like', 'desc1', $this->desc1])
            ->andFilterWhere(['like', 'desc2', $this->desc2])
            ->andFilterWhere(['like', 'desc3', $this->desc3])
            ->andFilterWhere(['like', 'desc4', $this->desc4]);

        return $dataProvider;
    }
}
