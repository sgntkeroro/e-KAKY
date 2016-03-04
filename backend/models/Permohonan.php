<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_permohonan".
 *
 * @property integer $permohonan_id
 * @property integer $user_id
 * @property string $permohonan_tarikh
 * @property integer $kelulusanJK_id
 * @property integer $katPermohonan_id
 * @property string $permohonan_tujuanBeli
 * @property string $permohonan_jenisPeruntukan
 * @property integer $tahunSedia_id
 * @property string $permohonan_lokasiCadangan
 * @property integer $statusPermohonan_id
 */
class Permohonan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'tbl_permohonan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'kelulusanJK_id', 'katPermohonan_id', 'tahunSedia_id', 'statusPermohonan_id'], 'integer'],
            [['permohonan_tarikh'], 'safe'],
            [['file'],'safe'],
            [['file'],'file'],
            [['permohonan_tujuanBeli', 'permohonan_jenisPeruntukan', 'permohonan_lokasiCadangan'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'permohonan_id' => 'Permohonan ID',
            'user_id' => 'User ID',
            'permohonan_tarikh' => 'Permohonan Tarikh',
            'kelulusanJK_id' => 'Kelulusan Jk ID',
            'katPermohonan_id' => 'Kat Permohonan ID',
            'permohonan_tujuanBeli' => 'Permohonan Tujuan Beli',
            'permohonan_jenisPeruntukan' => 'Permohonan Jenis Peruntukan',
            'tahunSedia_id' => 'Tahun Sedia ID',
            'permohonan_lokasiCadangan' => 'Permohonan Lokasi Cadangan',
            'statusPermohonan_id' => 'Status Permohonan ID',
            'file' => 'Buku Log Fail',
        ];
    }
}
