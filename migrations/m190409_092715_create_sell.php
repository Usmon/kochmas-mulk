<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m190409_092715_create_sell
 */
class m190409_092715_create_sell extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sell', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',// mavzusi  
            'area' => Schema::TYPE_STRING . ' NOT NULL', //maydoni
            'material' => Schema::TYPE_STRING . ' NOT NULL', // karush yo beton
            'cost' => Schema::TYPE_STRING . ' NOT NULL', //narxi
            'address' => Schema::TYPE_STRING . ' NOT NULL', // manzil
            'quality' => Schema::TYPE_STRING . ' NOT NULL', //sifat
            'rooms' => Schema::TYPE_INTEGER . ' NOT NULL', //xonalar soni

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190409_092715_create_sell cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190409_092715_create_sell cannot be reverted.\n";

        return false;
    }
    */
}

