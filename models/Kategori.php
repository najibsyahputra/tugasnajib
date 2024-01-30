<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property string $id_kategori
 * @property string|null $kode_kategori
 * @property string|null $created_at
 * @property string|null $update_at
 * @property int|null $status
 *
 * @property Barang[] $barangs
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori'], 'required'],
            [['created_at', 'update_at'], 'safe'],
            [['status'], 'integer'],
            [['id_kategori', 'kode_kategori'], 'string', 'max' => 100],
            [['id_kategori'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'kode_kategori' => 'Kode Kategori',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Barangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::class, ['id_kategori' => 'id_kategori']);
    }
}
