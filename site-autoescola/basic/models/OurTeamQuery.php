<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OurTeam]].
 *
 * @see OurTeam
 */
class OurTeamQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OurTeam[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OurTeam|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
