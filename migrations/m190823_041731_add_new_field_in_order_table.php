<?php

use yii\db\Migration;

/**
 * Class m190823_041731_add_new_field_in_order_table
 */
class m190823_041731_add_new_field_in_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("orders", "departure_date_numbers_of_nights", $this->string("255"));
        $this->addColumn("orders", "peoples_count", $this->string("255"));
        $this->addColumn("orders", "budget", $this->string("255"));
        $this->addColumn("orders", "tourist_city", $this->string("255"));

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
        ]);

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190823_041731_add_new_field_in_order_table cannot be reverted.\n";

        return false;
    }
    */
}
