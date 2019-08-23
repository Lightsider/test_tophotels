<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consultants".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $dir_country
 * @property string $dir_city
 * @property string $dir_resort
 * @property string $dir_stars
 */
class Consultants extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consultants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'dir_country', 'dir_city', 'dir_resort', 'dir_stars'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'dir_country' => 'Страна обслуживания',
            'dir_city' => 'Город обслуживания',
            'dir_resort' => 'Курорт обслуживания',
            'dir_stars' => 'Звездность обслуживания',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ConsultantsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ConsultantsQuery(get_called_class());
    }
}
