<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pemasukan;

/**
 * PemasukanSearch represents the model behind the search form of `app\models\Pemasukan`.
 */
class PemasukanSearch extends Pemasukan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pemasukan', 'tgl_pemasukan'], 'safe'],
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
        $query = Pemasukan::find();

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
            'tgl_pemasukan' => $this->tgl_pemasukan,
        ]);

        $query->andFilterWhere(['like', 'id_pemasukan', $this->id_pemasukan]);

        return $dataProvider;
    }
}
