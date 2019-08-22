<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dict.dict_city".
 *
 * @property int $id
 * @property string $name
 * @property bool $active
 * @property bool $trash
 * @property int $updated
 * @property string $date_create
 * @property int $country
 * @property int $district
 * @property string $name_eng
 * @property int $staff_modified
 * @property int $resort
 */
class DictCity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dict.dict_city';
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
            [['id', 'name', 'updated', 'date_create'], 'required'],
            [['id', 'updated', 'country', 'district', 'staff_modified', 'resort'], 'default', 'value' => null],
            [['id', 'updated', 'country', 'district', 'staff_modified', 'resort'], 'integer'],
            [['active', 'trash'], 'boolean'],
            [['date_create'], 'safe'],
            [['name', 'name_eng'], 'string', 'max' => 50],
            [['updated'], 'unique'],
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
            'active' => 'Active',
            'trash' => 'Trash',
            'updated' => 'Updated',
            'date_create' => 'Date Create',
            'country' => 'Country',
            'district' => 'District',
            'name_eng' => 'Name Eng',
            'staff_modified' => 'Staff Modified',
            'resort' => 'Resort',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DictCityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DictCityQuery(get_called_class());
    }
}
