<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_penjualan".
 *
 * @property int $id
 * @property int|null $id_barang
 * @property string|null $id_penjualan
 * @property int|null $jumlah_jual
 * @property float|null $sub_total
 *
 * @property Barang $barang
 * @property Penjualan $penjualan
 */
class DetailPenjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'jumlah_jual'], 'integer'],
            [['sub_total'], 'number'],
            [['id_penjualan'], 'string', 'max' => 100],
            [['id_penjualan'], 'exist', 'skipOnError' => true, 'targetClass' => Penjualan::class, 'targetAttribute' => ['id_penjualan' => 'id_penjualan']],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::class, 'targetAttribute' => ['id_barang' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_barang' => 'Id Barang',
            'id_penjualan' => 'Id Penjualan',
            'jumlah_jual' => 'Jumlah Jual',
            'sub_total' => 'Sub Total',
        ];
    }

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::class, ['id' => 'id_barang']);
    }

    /**
     * Gets query for [[Penjualan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualan()
    {
        return $this->hasOne(Penjualan::class, ['id_penjualan' => 'id_penjualan']);
    }
}
