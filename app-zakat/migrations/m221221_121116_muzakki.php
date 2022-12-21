<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m221221_121116_muzakki
 */
class m221221_121116_muzakki extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('muzakki', [
            'id' => Schema::TYPE_UBIGPK,
            'kode'=> $this->string(12)->unique()->notnull(),
            'nama'=> $this->string(360)->notNull(),
            'address'=> $this->text(),
            'phone' => $this->string(36)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('session');
        $this->dropTable('muzakki');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221221_121116_muzakki cannot be reverted.\n";

        return false;
    }
    */
}
