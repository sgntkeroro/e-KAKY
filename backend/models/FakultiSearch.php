<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Fakulti;

/**
 * FakultiSearch represents the model behind the search form about `backend\models\Fakulti`.
 */
class FakultiSearch extends Fakulti
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fakulti_id'], 'integer'],
            [['fakulti_nama'], 'safe'],
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
        $query = Fakulti::find();

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
            'fakulti_id' => $this->fakulti_id,
        ]);

        $query->andFilterWhere(['like', 'fakulti_nama', $this->fakulti_nama]);

        return $dataProvider;
    }
}
