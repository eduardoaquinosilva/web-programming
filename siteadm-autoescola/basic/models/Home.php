<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property int $idhome
 * @property string|null $banner1
 * @property string|null $banner2
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['banner1', 'banner2'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idhome' => 'Idhome',
            'banner1' => 'Banner1',
            'banner2' => 'Banner2',
        ];
    }

    /**
     * {@inheritdoc}
     * @return HomeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HomeQuery(get_called_class());
    }
}
