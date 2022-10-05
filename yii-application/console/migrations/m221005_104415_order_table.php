<?php

use yii\db\Migration;

/**
 * Class m221005_104415_order_table
 */
class m221005_104415_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'date' => $this->dateTime()->notNull(),
            'customer_id' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221005_104415_order_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221005_104415_order_table cannot be reverted.\n";

        return false;
    }
    */
}
