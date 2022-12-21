<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zakat_transaction".
 *
 * @property int $id
 * @property string $kode_transaksi
 * @property int|null $id_muzakki
 * @property string|null $tanggal
 * @property int|null $pay_beras
 * @property int|null $pay
 * @property int|null $jumlah
 * @property int|null $total
 */
class ZakatTransaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakat_transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_transaksi'], 'required'],
            [['id_muzakki', 'pay_beras', 'pay', 'jumlah', 'total'], 'integer'],
            [['tanggal'], 'safe'],
            [['kode_transaksi'], 'string', 'max' => 12],
            [['kode_transaksi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_transaksi' => 'Kode Transaksi',
            'id_muzakki' => 'Id Muzakki',
            'tanggal' => 'Tanggal',
            'pay_beras' => 'Pay Beras',
            'pay' => 'Pay',
            'jumlah' => 'Jumlah',
            'total' => 'Total',
        ];
    }

    public function getMuzakki()
    {
        return $this->hasOne(Muzakki::class, ['id' => 'id_muzakki']);
    }
}
