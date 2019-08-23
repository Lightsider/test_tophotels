<?php

use yii\db\Migration;

/**
 * Class m190823_062435_add_consultants_table
 */
class m190823_062435_add_consultants_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('consultants',[
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->null(),
            'email' => $this->string(255)->null(),
            'dir_country' => $this->string(255)->null(),
            'dir_city' => $this->string(255)->null(),
            'dir_resort' => $this->string(255)->null(),
            'dir_stars' => $this->string(255)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("consultants");

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190823_062435_add_consultants_table cannot be reverted.\n";

        return false;
    }
    */
}
