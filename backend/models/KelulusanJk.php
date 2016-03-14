<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_kelulusanJk".
 *
 * @property integer $kelulusanJK_id
 * @property string $kelulusanJK_nama
 */
class KelulusanJk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_kelulusanJk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kelulusanJK_nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kelulusanJK_id' => 'Kelulusan Jk ID',
            'kelulusanJK_nama' => 'Kelulusan Jk Nama',
        ];
    }

    public function getPermohonan()
    {
        return $this->hasOne(Permohonan::className(), ['permohonan_id' => 'permohonan_id']);
    }
}
