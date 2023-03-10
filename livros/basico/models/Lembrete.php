<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lembrete".
 *
 * @property int $id
 * @property string $titulo
 * @property string $data
 */
class Lembrete extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lembrete';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'data'], 'required'],
            [['data'], 'safe'],
            [['titulo'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'data' => 'Data',
        ];
    }

    /**
     * {@inheritdoc}
     * @return LembreteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LembreteQuery(get_called_class());
    }
}
