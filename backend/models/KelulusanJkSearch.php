<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KelulusanJk;

/**
 * KelulusanJkSearch represents the model behind the search form about `backend\models\KelulusanJk`.
 */
class KelulusanJkSearch extends KelulusanJk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kelulusanJK_id'], 'integer'],
            [['kelulusanJK_nama'], 'safe'],
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
        $query = KelulusanJk::find();

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
            'kelulusanJK_id' => $this->kelulusanJK_id,
        ]);

        $query->andFilterWhere(['like', 'kelulusanJK_nama', $this->kelulusanJK_nama]);

        return $dataProvider;
    }
}
