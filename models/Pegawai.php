<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property string $id_pegawai
 * @property string|null $nama_pegawai
 * @property string|null $password
 * @property string|null $status_pegawai
 * @property string|null $login_at
 * @property string|null $logout_at
 *
 * @property Penjualan[] $penjualans
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai'], 'required'],
            [['login_at', 'logout_at'], 'safe'],
            [['id_pegawai'], 'string', 'max' => 100],
            [['nama_pegawai'], 'string', 'max' => 50],
            [['password', 'status_pegawai'], 'string', 'max' => 30],
            [['id_pegawai'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_pegawai' => 'Nama Pegawai',
            'password' => 'Password',
            'status_pegawai' => 'Status Pegawai',
            'login_at' => 'Login At',
            'logout_at' => 'Logout At',
        ];
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::class, ['id_pegawai' => 'id_pegawai']);
    }
}
