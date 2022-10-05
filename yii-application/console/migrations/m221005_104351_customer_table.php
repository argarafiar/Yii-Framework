<?php

use yii\db\Migration;

/**
 * Class m221005_104351_customer_table
 */
class m221005_104351_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%customer}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221005_104351_customer_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221005_104351_customer_table cannot be reverted.\n";

        return false;
    }
    */
}
