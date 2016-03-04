<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_cawangan".
 *
 * @property integer $cawangan_id
 * @property integer $negeri_id
 * @property string $cawangan_nama
 * @property integer $cawangan_poskod
 */
class Cawangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_cawangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['negeri_id', 'cawangan_poskod'], 'integer'],
            [['cawangan_nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cawangan_id' => 'Cawangan ID',
            'negeri_id' => 'Negeri ID',
            'cawangan_nama' => 'Cawangan Nama',
            'cawangan_poskod' => 'Cawangan Poskod',
        ];
    }
}
