<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KELAS;

/**
 * SearchKelas represents the model behind the search form about `backend\models\KELAS`.
 */
class SearchKelas extends KELAS
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_KELAS'], 'integer'],
            [['NAMA_KELAS'], 'safe'],
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
        $query = KELAS::find();

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
            'ID_KELAS' => $this->ID_KELAS,
        ]);

        $query->andFilterWhere(['like', 'NAMA_KELAS', $this->NAMA_KELAS]);

        return $dataProvider;
    }
}
