<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\BukuLog;

/**
 * BukuLogSearch represents the model behind the search form about `backend\models\BukuLog`.
 */
class BukuLogSearch extends BukuLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bukuLog_id', 'permohonan_id'], 'integer'],
            [['bukuLog_nama', 'bukuLog_deskripsi', 'bukuLog_fail'], 'safe'],
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
        $query = BukuLog::find();

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
            'bukuLog_id' => $this->bukuLog_id,
            'permohonan_id' => $this->permohonan_id,
        ]);

        $query->andFilterWhere(['like', 'bukuLog_nama', $this->bukuLog_nama])
            ->andFilterWhere(['like', 'bukuLog_deskripsi', $this->bukuLog_deskripsi])
            ->andFilterWhere(['like', 'bukuLog_fail', $this->bukuLog_fail]);

        return $dataProvider;
    }
}
