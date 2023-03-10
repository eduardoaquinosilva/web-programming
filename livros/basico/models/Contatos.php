<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contatos".
 *
 * @property int $id
 * @property string $nome
 * @property string $telefone
 */
class Contatos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contatos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'telefone'], 'required'],
            [['nome'], 'string', 'max' => 200],
            [['telefone'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ContatosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContatosQuery(get_called_class());
    }
}
