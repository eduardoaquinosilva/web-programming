<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $idtestimonial
 * @property string|null $nome
 * @property string|null $profissao
 * @property string|null $comentario
 * @property string|null $url_img
 */
class Testimonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comentario'], 'string'],
            [['nome', 'profissao', 'url_img'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtestimonial' => 'Idtestimonial',
            'nome' => 'Nome',
            'profissao' => 'Profissao',
            'comentario' => 'Comentario',
            'url_img' => 'Url Img',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TestimonialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TestimonialQuery(get_called_class());
    }
}
