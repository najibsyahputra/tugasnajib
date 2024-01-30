<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property string|null $kategori_id
 * @property string|null $nama_barang
 * @property string|null $merk_barang
 * @property string|null $ukuran_barang
 * @property string|null $kode_bercode
 * @property int|null $stok
 * @property float|null $harga
 *
 * @property DetailPemasukan[] $detailPemasukans
 * @property DetilPenjualan[] $detilPenjualans
 * @property Kategori $kategori
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stok'], 'integer'],
            [['harga'], 'number'],
            [['kategori_id'], 'string', 'max' => 100],
            [['nama_barang'], 'string', 'max' => 50],
            [['merk_barang'], 'string', 'max' => 70],
            [['ukuran_barang'], 'string', 'max' => 10],
            [['kode_bercode'], 'string', 'max' => 200],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::class, 'targetAttribute' => ['kategori_id' => 'id_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kategori_id' => 'Kategori ID',
            'nama_barang' => 'Nama barang',
            'merk_barang' => 'Merk barang',
            'ukuran_barang' => 'Ukuran Barang',
            'kode_bercode' => 'Kode Bercode',
            'stok' => 'Stok',
            'harga' => 'Harga',
        ];
    }

    /**
     * Gets query for [[DetailPemasukans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPemasukans()
    {
        return $this->hasMany(DetailPemasukan::class, ['id_barang' => 'id']);
    }

    /**
     * Gets query for [[DetilPenjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetilPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class, ['id_barang' => 'id']);
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::class, ['id_kategori' => 'kategori_id']);
    }
}
