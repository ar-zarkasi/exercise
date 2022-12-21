<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "muzakki".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property string|null $address
 * @property string|null $phone
 */
class Muzakki extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'muzakki';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama'], 'required'],
            [['address'], 'string'],
            [['kode'], 'string', 'max' => 12],
            [['nama'], 'string', 'max' => 360],
            [['phone'], 'string', 'max' => 36],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'address' => 'Address',
            'phone' => 'Phone',
        ];
    }
}
