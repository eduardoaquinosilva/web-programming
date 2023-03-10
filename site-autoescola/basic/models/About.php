<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $idabout
 * @property string|null $titulo
 * @property string|null $telefone
 * @property string|null $texto1
 * @property string|null $texto2
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['texto1', 'texto2'], 'string'],
            [['titulo', 'telefone'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idabout' => 'Idabout',
            'titulo' => 'Titulo',
            'telefone' => 'Telefone',
            'texto1' => 'Texto1',
            'texto2' => 'Texto2',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AboutQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AboutQuery(get_called_class());
    }
}
