<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Jabatan;

/**
 * JabatanSearch represents the model behind the search form about `backend\models\Jabatan`.
 */
class JabatanSearch extends Jabatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jabatan_id'], 'integer'],
            [['jabatan_nama'], 'safe'],
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
        $query = Jabatan::find();

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
            'jabatan_id' => $this->jabatan_id,
        ]);

        $query->andFilterWhere(['like', 'jabatan_nama', $this->jabatan_nama]);

        return $dataProvider;
    }
}
