<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Permohonan;

/**
 * PermohonanSearch represents the model behind the search form about `backend\models\Permohonan`.
 */
class PermohonanSearch extends Permohonan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permohonan_id', 'user_id', 'kelulusanJK_id', 'katPermohonan_id', 'tahunSedia_id', 'statusPermohonan_id'], 'integer'],
            [['permohonan_tarikh', 'permohonan_tujuanBeli', 'permohonan_jenisPeruntukan', 'permohonan_lokasiCadangan'], 'safe'],
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
        $query = Permohonan::find();

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
            'permohonan_id' => $this->permohonan_id,
            'user_id' => $this->user_id,
            'permohonan_tarikh' => $this->permohonan_tarikh,
            'kelulusanJK_id' => $this->kelulusanJK_id,
            'katPermohonan_id' => $this->katPermohonan_id,
            'tahunSedia_id' => $this->tahunSedia_id,
            'statusPermohonan_id' => $this->statusPermohonan_id,
        ]);

        $query->andFilterWhere(['like', 'permohonan_tujuanBeli', $this->permohonan_tujuanBeli])
            ->andFilterWhere(['like', 'permohonan_jenisPeruntukan', $this->permohonan_jenisPeruntukan])
            ->andFilterWhere(['like', 'permohonan_lokasiCadangan', $this->permohonan_lokasiCadangan]);

        return $dataProvider;
    }
}
