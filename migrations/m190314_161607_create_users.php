<?php

use yii\db\Migration;

/**
 * Class m190314_161607_create_users
 */
class m190314_161607_create_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190314_161607_create_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190314_161607_create_users cannot be reverted.\n";

        return false;
    }
    */
}
