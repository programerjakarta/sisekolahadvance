<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PELAJARAN;

/**
 * SearchPelajaran represents the model behind the search form about `backend\models\PELAJARAN`.
 */
class SearchPelajaran extends PELAJARAN
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PELAJARAN'], 'integer'],
            [['NAMA_PELAJARAN'], 'safe'],
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
        $query = PELAJARAN::find();

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
            'ID_PELAJARAN' => $this->ID_PELAJARAN,
        ]);

        $query->andFilterWhere(['like', 'NAMA_PELAJARAN', $this->NAMA_PELAJARAN]);

        return $dataProvider;
    }
}
