<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "features".
 *
 * @property int $idfeatures
 * @property string|null $titulo
 * @property string|null $subtitulo
 * @property string|null $desc1
 * @property string|null $desc2
 * @property string|null $desc3
 * @property string|null $desc4
 */
class Features extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'features';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'subtitulo'], 'string', 'max' => 100],
            [['desc1', 'desc2', 'desc3', 'desc4'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idfeatures' => 'Idfeatures',
            'titulo' => 'Titulo',
            'subtitulo' => 'Subtitulo',
            'desc1' => 'Desc1',
            'desc2' => 'Desc2',
            'desc3' => 'Desc3',
            'desc4' => 'Desc4',
        ];
    }

    /**
     * {@inheritdoc}
     * @return FeaturesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FeaturesQuery(get_called_class());
    }
}
