<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StatusMesyuarat;

/**
 * StatusMesyuaratSearch represents the model behind the search form about `backend\models\StatusMesyuarat`.
 */
class StatusMesyuaratSearch extends StatusMesyuarat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statusMesyuarat_id'], 'integer'],
            [['statusMesyuarat_nama'], 'safe'],
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
        $query = StatusMesyuarat::find();

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
            'statusMesyuarat_id' => $this->statusMesyuarat_id,
        ]);

        $query->andFilterWhere(['like', 'statusMesyuarat_nama', $this->statusMesyuarat_nama]);

        return $dataProvider;
    }
}
