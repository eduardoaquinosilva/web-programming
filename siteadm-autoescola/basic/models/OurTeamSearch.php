<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OurTeam;

/**
 * OurTeamSearch represents the model behind the search form of `app\models\OurTeam`.
 */
class OurTeamSearch extends OurTeam
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idour_team'], 'integer'],
            [['nome1', 'cargo1', 'url_img1', 'url_facebook1', 'url_twitter1', 'url_instagram1', 'nome2', 'cargo2', 'url_img2', 'url_facebook2', 'url_twitter2', 'url_instagram2', 'nome3', 'cargo3', 'url_img3', 'url_facebook3', 'url_twitter3', 'url_instagram3', 'nome4', 'cargo4', 'url_img4', 'url_facebook4', 'url_twitter4', 'url_instagram4'], 'safe'],
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
        $query = OurTeam::find();

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
            'idour_team' => $this->idour_team,
        ]);

        $query->andFilterWhere(['like', 'nome1', $this->nome1])
            ->andFilterWhere(['like', 'cargo1', $this->cargo1])
            ->andFilterWhere(['like', 'url_img1', $this->url_img1])
            ->andFilterWhere(['like', 'url_facebook1', $this->url_facebook1])
            ->andFilterWhere(['like', 'url_twitter1', $this->url_twitter1])
            ->andFilterWhere(['like', 'url_instagram1', $this->url_instagram1])
            ->andFilterWhere(['like', 'nome2', $this->nome2])
            ->andFilterWhere(['like', 'cargo2', $this->cargo2])
            ->andFilterWhere(['like', 'url_img2', $this->url_img2])
            ->andFilterWhere(['like', 'url_facebook2', $this->url_facebook2])
            ->andFilterWhere(['like', 'url_twitter2', $this->url_twitter2])
            ->andFilterWhere(['like', 'url_instagram2', $this->url_instagram2])
            ->andFilterWhere(['like', 'nome3', $this->nome3])
            ->andFilterWhere(['like', 'cargo3', $this->cargo3])
            ->andFilterWhere(['like', 'url_img3', $this->url_img3])
            ->andFilterWhere(['like', 'url_facebook3', $this->url_facebook3])
            ->andFilterWhere(['like', 'url_twitter3', $this->url_twitter3])
            ->andFilterWhere(['like', 'url_instagram3', $this->url_instagram3])
            ->andFilterWhere(['like', 'nome4', $this->nome4])
            ->andFilterWhere(['like', 'cargo4', $this->cargo4])
            ->andFilterWhere(['like', 'url_img4', $this->url_img4])
            ->andFilterWhere(['like', 'url_facebook4', $this->url_facebook4])
            ->andFilterWhere(['like', 'url_twitter4', $this->url_twitter4])
            ->andFilterWhere(['like', 'url_instagram4', $this->url_instagram4]);

        return $dataProvider;
    }
}
