<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemasukan".
 *
 * @property string $id_pemasukan
 * @property string|null $tgl_pemasukan
 *
 * @property DetailPemasukan[] $detailPemasukans
 */
class Pemasukan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemasukan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pemasukan'], 'required'],
            [['tgl_pemasukan'], 'safe'],
            [['id_pemasukan'], 'string', 'max' => 100],
            [['id_pemasukan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemasukan' => 'Id Pemasukan',
            'tgl_pemasukan' => 'Tgl Pemasukan',
        ];
    }

    /**
     * Gets query for [[DetailPemasukans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPemasukans()
    {
        return $this->hasMany(DetailPemasukan::class, ['id_pemasukan' => 'id_pemasukan']);
    }
}
