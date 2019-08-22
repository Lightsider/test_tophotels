<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[DictDictCountry]].
 *
 * @see DictCountry
 */
class DictCountryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return DictCountry[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return DictCountry|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
