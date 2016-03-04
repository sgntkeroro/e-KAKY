<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_negeri".
 *
 * @property integer $negeri_id
 * @property string $negeri_nama
 */
class Negeri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_negeri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['negeri_nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'negeri_id' => 'Negeri ID',
            'negeri_nama' => 'Negeri Nama',
        ];
    }
}
