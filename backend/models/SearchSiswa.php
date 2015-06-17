<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SISWA;

/**
 * SearchSiswa represents the model behind the search form about `backend\models\SISWA`.
 */
class SearchSiswa extends SISWA
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_SISWA', 'KELAS'], 'integer'],
            [['NAMA_LENGKAP', 'ALAMAT_KOTA', 'ALAMAT_RINCI'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = SISWA::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID_SISWA' => $this->ID_SISWA,
            'KELAS' => $this->KELAS,
        ]);

        $query->andFilterWhere(['like', 'NAMA_LENGKAP', $this->NAMA_LENGKAP])
            ->andFilterWhere(['like', 'ALAMAT_KOTA', $this->ALAMAT_KOTA])
            ->andFilterWhere(['like', 'ALAMAT_RINCI', $this->ALAMAT_RINCI]);

        return $dataProvider;
    }
}
