<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Livros;

/**
 * LivrosSearch represents the model behind the search form of `app\models\Livros`.
 */
class LivrosSearch extends Livros
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'autor', 'preco', 'data'], 'safe'],
            [['quantidade', 'flag'], 'integer'],
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
        $query = Livros::find();

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
            'quantidade' => $this->quantidade,
            'flag' => $this->flag,
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'autor', $this->autor])
            ->andFilterWhere(['like', 'preco', $this->preco]);

        return $dataProvider;
    }
}
