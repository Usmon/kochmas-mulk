<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190420_044440_alter_tablename_newcolumn_to_sell_table
 */
class m190420_044440_alter_tablename_newcolumn_to_sell_table extends Migration
{
    /**
     * {@inheritdoc}
     */
   
        public function up()
        {
            $this->addColumn('sell','image',$this->string(100)->after('rooms'));
        }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('sell','image');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190420_044440_alter_tablename_newcolumn_to_sell_table cannot be reverted.\n";

        return false;
    }
    */
}
