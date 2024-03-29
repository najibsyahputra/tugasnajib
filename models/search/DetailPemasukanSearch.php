<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailPemasukan;

/**
 * DetailPemasukanSearch represents the model behind the search form of `app\models\DetailPemasukan`.
 */
class DetailPemasukanSearch extends DetailPemasukan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_barang', 'stok_masuk'], 'integer'],
            [['id_pemasukan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DetailPemasukan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_barang' => $this->id_barang,
            'stok_masuk' => $this->stok_masuk,
        ]);

        $query->andFilterWhere(['like', 'id_pemasukan', $this->id_pemasukan]);

        return $dataProvider;
    }
}
