<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_katPermohonan".
 *
 * @property integer $katPermohonan_id
 * @property string $katPermohonan_nama
 */
class KatPermohonan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_katPermohonan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['katPermohonan_nama'], 'required'],
            [['katPermohonan_nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'katPermohonan_id' => 'Kat Permohonan ID',
            'katPermohonan_nama' => 'Kat Permohonan Nama',
        ];
    }
}
