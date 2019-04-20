<?php

use yii\db\Migration;
use yii\db\Schema;


/**
 * Class m190420_140221_alter_tablename_newcontentcolumn_to_sell_table
 */
class m190420_140221_alter_tablename_newcontentcolumn_to_sell_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
        {
            $this->addColumn('sell','content',$this->string(300));
        }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('sell','content');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190420_140221_alter_tablename_newcontentcolumn_to_sell_table cannot be reverted.\n";

        return false;
    }
    */
}
