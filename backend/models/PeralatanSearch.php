<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Peralatan;

/**
 * PeralatanSearch represents the model behind the search form about `backend\models\Peralatan`.
 */
class PeralatanSearch extends Peralatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['peralatan_id', 'permohonan_id', 'peralatan_kuantiti'], 'integer'],
            [['peralatan_nama', 'peralatan_hargaSeunit'], 'safe'],
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
        $query = Peralatan::find();

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
            'peralatan_id' => $this->peralatan_id,
            'permohonan_id' => $this->permohonan_id,
            'peralatan_kuantiti' => $this->peralatan_kuantiti,
        ]);

        $query->andFilterWhere(['like', 'peralatan_nama', $this->peralatan_nama])
            ->andFilterWhere(['like', 'peralatan_hargaSeunit', $this->peralatan_hargaSeunit]);

        return $dataProvider;
    }
}
