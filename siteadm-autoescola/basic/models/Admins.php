<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admins".
 *
 * @property int $idadmins
 * @property string|null $username
 * @property string|null $passwd
 */
class Admins extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admins';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'string', 'max' => 100],
            [['passwd'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idadmins' => 'Idadmins',
            'username' => 'Username',
            'passwd' => 'Passwd',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AdminsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdminsQuery(get_called_class());
    }
}
