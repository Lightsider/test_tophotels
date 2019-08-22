<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dict.dict_country".
 *
 * @property int $id
 * @property string $name
 * @property string $name_eng
 * @property string $nick
 * @property string $label
 * @property int $region
 * @property string $name_genitive
 * @property bool $active
 * @property bool $trash
 * @property string $date_create
 * @property int $phone_code
 * @property int $updated
 * @property int $th_updated признак обновления записи, используется для построения таблицы кэша отелей на ТХ
 */
class DictCountry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dict.dict_country';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('remote_db');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'region', 'date_create', 'updated', 'th_updated'], 'required'],
            [['id', 'region', 'phone_code', 'updated', 'th_updated'], 'default', 'value' => null],
            [['id', 'region', 'phone_code', 'updated', 'th_updated'], 'integer'],
            [['active', 'trash'], 'boolean'],
            [['date_create'], 'safe'],
            [['name', 'name_eng', 'nick', 'label', 'name_genitive'], 'string', 'max' => 50],
            [['updated'], 'unique'],
            [['th_updated'], 'unique'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'name_eng' => 'Name Eng',
            'nick' => 'Nick',
            'label' => 'Label',
            'region' => 'Region',
            'name_genitive' => 'Name Genitive',
            'active' => 'Active',
            'trash' => 'Trash',
            'date_create' => 'Date Create',
            'phone_code' => 'Phone Code',
            'updated' => 'Updated',
            'th_updated' => 'Th Updated',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DictCountryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DictCountryQuery(get_called_class());
    }
}
