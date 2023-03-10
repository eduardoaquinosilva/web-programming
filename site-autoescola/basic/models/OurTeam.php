<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "our_team".
 *
 * @property int $idour_team
 * @property string|null $nome1
 * @property string|null $cargo1
 * @property string|null $url_img1
 * @property string|null $url_facebook1
 * @property string|null $url_twitter1
 * @property string|null $url_instagram1
 * @property string|null $nome2
 * @property string|null $cargo2
 * @property string|null $url_img2
 * @property string|null $url_facebook2
 * @property string|null $url_twitter2
 * @property string|null $url_instagram2
 * @property string|null $nome3
 * @property string|null $cargo3
 * @property string|null $url_img3
 * @property string|null $url_facebook3
 * @property string|null $url_twitter3
 * @property string|null $url_instagram3
 * @property string|null $nome4
 * @property string|null $cargo4
 * @property string|null $url_img4
 * @property string|null $url_facebook4
 * @property string|null $url_twitter4
 * @property string|null $url_instagram4
 */
class OurTeam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'our_team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome1', 'cargo1', 'url_img1', 'url_facebook1', 'url_twitter1', 'url_instagram1', 'nome2', 'cargo2', 'url_img2', 'url_facebook2', 'url_twitter2', 'url_instagram2', 'nome3', 'cargo3', 'url_img3', 'url_facebook3', 'url_twitter3', 'url_instagram3', 'nome4', 'cargo4', 'url_img4', 'url_facebook4', 'url_twitter4', 'url_instagram4'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idour_team' => 'Idour Team',
            'nome1' => 'Nome1',
            'cargo1' => 'Cargo1',
            'url_img1' => 'Url Img1',
            'url_facebook1' => 'Url Facebook1',
            'url_twitter1' => 'Url Twitter1',
            'url_instagram1' => 'Url Instagram1',
            'nome2' => 'Nome2',
            'cargo2' => 'Cargo2',
            'url_img2' => 'Url Img2',
            'url_facebook2' => 'Url Facebook2',
            'url_twitter2' => 'Url Twitter2',
            'url_instagram2' => 'Url Instagram2',
            'nome3' => 'Nome3',
            'cargo3' => 'Cargo3',
            'url_img3' => 'Url Img3',
            'url_facebook3' => 'Url Facebook3',
            'url_twitter3' => 'Url Twitter3',
            'url_instagram3' => 'Url Instagram3',
            'nome4' => 'Nome4',
            'cargo4' => 'Cargo4',
            'url_img4' => 'Url Img4',
            'url_facebook4' => 'Url Facebook4',
            'url_twitter4' => 'Url Twitter4',
            'url_instagram4' => 'Url Instagram4',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OurTeamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OurTeamQuery(get_called_class());
    }
}
