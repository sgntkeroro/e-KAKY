<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MohonBaru;

/**
 * MohonBaruSearch represents the model behind the search form about `backend\models\MohonBaru`.
 */
class MohonBaruSearch extends MohonBaru
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mohonBaru_id', 'permohonan_id'], 'integer'],
            [['mohonBaru_program', 'mohonBaru_tahapPengajian'], 'safe'],
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
        $query = MohonBaru::find();

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
            'mohonBaru_id' => $this->mohonBaru_id,
            'permohonan_id' => $this->permohonan_id,
        ]);

        $query->andFilterWhere(['like', 'mohonBaru_program', $this->mohonBaru_program])
            ->andFilterWhere(['like', 'mohonBaru_tahapPengajian', $this->mohonBaru_tahapPengajian]);

        return $dataProvider;
    }
}
