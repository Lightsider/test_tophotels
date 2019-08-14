<?php

use yii\db\Migration;

/**
 * Class m190813_084113_add_orders_table
 */
class m190813_084113_add_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orders',[
            'id' => $this->primaryKey(),
            'created_at'=>$this->dateTime()->notNull(),
            'direction' => $this->string(255)->null(),
            'name' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'email' => $this->string(255)->null(),
            'text'=> $this->text()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("orders");

        return true;
    }
}
