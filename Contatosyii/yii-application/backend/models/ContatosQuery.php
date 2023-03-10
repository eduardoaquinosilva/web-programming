<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Contatos]].
 *
 * @see Contatos
 */
class ContatosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Contatos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Contatos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
