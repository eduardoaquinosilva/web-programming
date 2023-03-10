<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appointment".
 *
 * @property int $idappointment
 * @property string|null $nome
 * @property string|null $email
 * @property string|null $tipo_curso
 * @property string|null $tipo_carro
 * @property string|null $menssagem
 * @property string|null $data_hora
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menssagem'], 'string'],
            [['data_hora'], 'safe'],
            [['nome', 'email', 'tipo_curso', 'tipo_carro'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idappointment' => 'Idappointment',
            'nome' => 'Nome',
            'email' => 'Email',
            'tipo_curso' => 'Tipo Curso',
            'tipo_carro' => 'Tipo Carro',
            'menssagem' => 'Menssagem',
            'data_hora' => 'Data Hora',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AppointmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AppointmentQuery(get_called_class());
    }
}
