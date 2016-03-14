<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_bukuLog".
 *
 * @property integer $bukuLog_id
 * @property integer $permohonan_id
 * @property string $bukuLog_nama
 * @property string $bukuLog_deskripsi
 * @property string $bukuLog_fail
 */
class BukuLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'tbl_bukuLog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permohonan_id'], 'integer'],
            [['bukuLog_fail'],'safe'],
            [['bukuLog_fail'],'file'],
            [['bukuLog_nama', 'bukuLog_deskripsi', 'bukuLog_fail'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bukuLog_id' => 'Buku Log ID',
            'permohonan_id' => 'Permohonan ID',
            'bukuLog_nama' => 'Buku Log Nama',
            'bukuLog_deskripsi' => 'Buku Log Deskripsi',
            'bukuLog_fail' => 'Buku Log Fail',
        ];
    }

    public function getPermohonan()
    {
        return $this->hasOne(Permohonan::className(), ['permohonan_id' => 'permohonan_id']);
    }
}
