<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Home]].
 *
 * @see Home
 */
class HomeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Home[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Home|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
