<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m221221_121711_zakat_transaction
 */
class m221221_121711_zakat_transaction extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('zakat_transaction', [
            'id' => Schema::TYPE_UBIGPK,
            'kode_transaksi'=> $this->string(12)->unique()->notnull(),
            'id_muzakki'=> $this->bigInteger()->null(),
            'tanggal' => $this->datetime()->defaultValue(NULL),
            'pay_beras'=> $this->integer()->defaultValue(NULL),
            'pay'=> $this->integer()->defaultValue(NULL),
            'jumlah'=> $this->integer()->defaultValue(0),
            'total'=> $this->integer()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('zakat_transaction');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221221_121711_zakat_transaction cannot be reverted.\n";

        return false;
    }
    */
}
