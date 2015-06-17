<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\GURU;

/**
 * SearchGuru represents the model behind the search form about `backend\models\GURU`.
 */
class SearchGuru extends GURU
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_GURU', 'ID_KELAS'], 'integer'],
            [['NAMA', 'ALAMAT'], 'safe'],
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
        $query = GURU::find();

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
            'ID_GURU' => $this->ID_GURU,
            'ID_KELAS' => $this->ID_KELAS,
        ]);

        $query->andFilterWhere(['like', 'NAMA', $this->NAMA])
            ->andFilterWhere(['like', 'ALAMAT', $this->ALAMAT]);

        return $dataProvider;
    }
}
