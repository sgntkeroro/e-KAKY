<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_statusPermohonan".
 *
 * @property integer $statusPermohonan_id
 * @property string $statusPermohonan_nama
 */
class StatusPermohonan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_statusPermohonan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statusPermohonan_nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'statusPermohonan_id' => 'Status Permohonan ID',
            'statusPermohonan_nama' => 'Status Permohonan Nama',
        ];
    }

    public function getPermohonan()
    {
        return $this->hasOne(Permohonan::className(), ['permohonan_id' => 'permohonan_id']);
    }
}
