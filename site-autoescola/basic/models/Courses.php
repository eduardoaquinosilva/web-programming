<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $idcourses
 * @property int|null $preco1
 * @property string|null $desc1
 * @property string|null $nivel1
 * @property int|null $duracao1
 * @property int|null $preco2
 * @property string|null $desc2
 * @property string|null $nivel2
 * @property int|null $duracao2
 * @property int|null $preco3
 * @property string|null $desc3
 * @property string|null $nivel3
 * @property int|null $duracao3
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preco1', 'duracao1', 'preco2', 'duracao2', 'preco3', 'duracao3'], 'integer'],
            [['desc1', 'desc2', 'desc3'], 'string', 'max' => 100],
            [['nivel1', 'nivel2', 'nivel3'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcourses' => 'Idcourses',
            'preco1' => 'Preco1',
            'desc1' => 'Desc1',
            'nivel1' => 'Nivel1',
            'duracao1' => 'Duracao1',
            'preco2' => 'Preco2',
            'desc2' => 'Desc2',
            'nivel2' => 'Nivel2',
            'duracao2' => 'Duracao2',
            'preco3' => 'Preco3',
            'desc3' => 'Desc3',
            'nivel3' => 'Nivel3',
            'duracao3' => 'Duracao3',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CoursesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CoursesQuery(get_called_class());
    }
}
