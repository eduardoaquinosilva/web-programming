<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "livros".
 *
 * @property string $nome
 * @property string|null $autor
 * @property int $quantidade
 * @property string $preco
 * @property int|null $flag
 * @property string $data
 */
class Livros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'livros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'quantidade', 'preco', 'data'], 'required'],
            [['quantidade', 'flag'], 'integer'],
            [['data'], 'safe'],
            [['nome', 'autor', 'preco'], 'string', 'max' => 255],
            [['nome'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nome' => 'Nome',
            'autor' => 'Autor',
            'quantidade' => 'Quantidade',
            'preco' => 'Preco',
            'flag' => 'Flag',
            'data' => 'Data',
        ];
    }

    /**
     * {@inheritdoc}
     * @return LivrosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LivrosQuery(get_called_class());
    }
}
