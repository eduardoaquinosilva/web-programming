<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Features]].
 *
 * @see Features
 */
class FeaturesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Features[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Features|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
