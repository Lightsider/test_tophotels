<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Consultants]].
 *
 * @see Consultants
 */
class ConsultantsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Consultants[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Consultants|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
