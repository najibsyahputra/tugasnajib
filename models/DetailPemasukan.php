<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_pemasukan".
 *
 * @property int $id
 * @property int|null $id_barang
 * @property string|null $id_pemasukan
 * @property int|null $stok_masuk
 *
 * @property Barang $barang
 * @property Pemasukan $pemasukan
 */
class DetailPemasukan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_pemasukan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'stok_masuk'], 'integer'],
            [['id_pemasukan'], 'string', 'max' => 100],
            [['id_pemasukan'], 'exist', 'skipOnError' => true, 'targetClass' => Pemasukan::class, 'targetAttribute' => ['id_pemasukan' => 'id_pemasukan']],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::class, 'targetAttribute' => ['id_barang' => 'id_barang']],
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
            'id_pemasukan' => 'Id Pemasukan',
            'stok_masuk' => 'Stok Masuk',
        ];
    }

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::class, ['id_barang' => 'id_barang']);
    }

    /**
     * Gets query for [[Pemasukan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemasukan()
    {
        return $this->hasOne(Pemasukan::class, ['id_pemasukan' => 'id_pemasukan']);
    }
}
