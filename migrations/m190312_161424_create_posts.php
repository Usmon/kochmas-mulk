<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m190312_161424_create_posts
 */
class m190312_161424_create_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('posts', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'create_date' => Schema::TYPE_DATETIME . ' NOT NULL'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190312_161424_create_posts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190312_161424_create_posts cannot be reverted.\n";

        return false;
    }
    */
}
