<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property string $id_penjualan
 * @property string|null $id_pegawai
 * @property string|null $tgl_penjualan
 * @property float|null $total_harga_penjualan
 *
 * @property DetilPenjualan[] $detilPenjualans
 * @property Pegawai $pegawai
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penjualan'], 'required'],
            [['tgl_penjualan'], 'safe'],
            [['total_harga_penjualan'], 'number'],
            [['id_penjualan', 'id_pegawai'], 'string', 'max' => 100],
            [['id_penjualan'], 'unique'],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id_pegawai' => 'id_pegawai']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penjualan' => 'Id Penjualan',
            'id_pegawai' => 'Id Pegawai',
            'tgl_penjualan' => 'Tgl Penjualan',
            'total_harga_penjualan' => 'Total Harga Penjualan',
        ];
    }

    /**
     * Gets query for [[DetilPenjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetilPenjualans()
    {
        return $this->hasMany(DetilPenjualan::class, ['id_penjualan' => 'id_penjualan']);
    }

    /**
     * Gets query for [[Pegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::class, ['id_pegawai' => 'id_pegawai']);
    }
}
