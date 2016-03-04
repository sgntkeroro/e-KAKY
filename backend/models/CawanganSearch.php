<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cawangan;

/**
 * CawanganSearch represents the model behind the search form about `backend\models\Cawangan`.
 */
class CawanganSearch extends Cawangan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cawangan_id', 'negeri_id', 'cawangan_poskod'], 'integer'],
            [['cawangan_nama'], 'safe'],
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
        $query = Cawangan::find();

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
            'cawangan_id' => $this->cawangan_id,
            'negeri_id' => $this->negeri_id,
            'cawangan_poskod' => $this->cawangan_poskod,
        ]);

        $query->andFilterWhere(['like', 'cawangan_nama', $this->cawangan_nama]);

        return $dataProvider;
    }
}
