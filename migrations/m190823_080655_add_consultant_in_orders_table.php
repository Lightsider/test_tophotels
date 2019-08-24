<?php

use yii\db\Migration;

/**
 * Class m190823_080655_add_consultant_in_orders_table
 */
class m190823_080655_add_consultant_in_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable("orders");

        $this->createTable('orders',[
            'id' => $this->primaryKey(),
            'created_at'=>$this->dateTime()->notNull(),
            'direction' => $this->string(255)->null(),
            'name' => $this->string(255)->null(),
            'phone' => $this->string(255)->null(),
            'email' => $this->string(255)->null(),
            'text'=> $this->text()->null(),
            "departure_date_numbers_of_nights" => $this->string("255")->null(),
            "peoples_count" => $this->string("255")->null(),
            "budget" => $this->string("255")->null(),
            "tourist_city" => $this->string("255")->null(),
            "consultant" => 'integer REFERENCES consultants(id)'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("orders");

        $this->createTable('orders',[
            'id' => $this->primaryKey(),
            'created_at'=>$this->dateTime()->notNull(),
            'direction' => $this->string(255)->null(),
            'name' => $this->string(255)->null(),
            'phone' => $this->string(255)->null(),
            'email' => $this->string(255)->null(),
            'text'=> $this->text()->null(),
            "departure_date_numbers_of_nights" => $this->string("255")->null(),
            "peoples_count" => $this->string("255")->null(),
            "budget" => $this->string("255")->null(),
            "tourist_city" => $this->string("255")->null(),
        ]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190823_080655_add_consultant_in_orders_table cannot be reverted.\n";

        return false;
    }
    */
}
