<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_tahunSedia".
 *
 * @property integer $tahunSedia_id
 * @property integer $tahunSedia_tahun
 */
class TahunSedia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_tahunSedia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tahunSedia_tahun'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tahunSedia_id' => 'Tahun Sedia ID',
            'tahunSedia_tahun' => 'Tahun Sedia Tahun',
        ];
    }
}
