<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Courses;

/**
 * CoursesSearch represents the model behind the search form of `app\models\Courses`.
 */
class CoursesSearch extends Courses
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcourses', 'preco1', 'duracao1', 'preco2', 'duracao2', 'preco3', 'duracao3'], 'integer'],
            [['desc1', 'nivel1', 'desc2', 'nivel2', 'desc3', 'nivel3'], 'safe'],
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
        $query = Courses::find();

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
            'idcourses' => $this->idcourses,
            'preco1' => $this->preco1,
            'duracao1' => $this->duracao1,
            'preco2' => $this->preco2,
            'duracao2' => $this->duracao2,
            'preco3' => $this->preco3,
            'duracao3' => $this->duracao3,
        ]);

        $query->andFilterWhere(['like', 'desc1', $this->desc1])
            ->andFilterWhere(['like', 'nivel1', $this->nivel1])
            ->andFilterWhere(['like', 'desc2', $this->desc2])
            ->andFilterWhere(['like', 'nivel2', $this->nivel2])
            ->andFilterWhere(['like', 'desc3', $this->desc3])
            ->andFilterWhere(['like', 'nivel3', $this->nivel3]);

        return $dataProvider;
    }
}
