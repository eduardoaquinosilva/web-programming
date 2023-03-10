<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $idcontact
 * @property string|null $nome
 * @property string|null $email
 * @property string|null $assunto
 * @property string|null $menssagem
 * @property string|null $data_hora
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menssagem'], 'string'],
            [['data_hora'], 'safe'],
            [['nome', 'email'], 'string', 'max' => 100],
            [['assunto'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcontact' => 'Idcontact',
            'nome' => 'Nome',
            'email' => 'Email',
            'assunto' => 'Assunto',
            'menssagem' => 'Menssagem',
            'data_hora' => 'Data Hora',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContactQuery(get_called_class());
    }
}
