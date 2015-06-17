<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ABSENSI;

/**
 * AbsensiSearch represents the model behind the search form about `backend\models\ABSENSI`.
 */
class AbsensiSearch extends ABSENSI
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ABSESNI', 'ID_SISWA'], 'integer'],
            [['TANGGAL', 'JAM_MASUK', 'JAM_PULANG'], 'safe'],
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
        $query = ABSENSI::find();

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
            'ID_ABSESNI' => $this->ID_ABSESNI,
            'ID_SISWA' => $this->ID_SISWA,
            'TANGGAL' => $this->TANGGAL,
        ]);

        $query->andFilterWhere(['like', 'JAM_MASUK', $this->JAM_MASUK])
            ->andFilterWhere(['like', 'JAM_PULANG', $this->JAM_PULANG]);

        return $dataProvider;
    }
}
