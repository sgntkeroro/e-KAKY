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
            'permohonan_id' => '',
            'user_id' => '',
            'permohonan_tarikh' => '',
            'kelulusanJK_id' => 'Kelulusan Jawatankuasa Teknikal Berkaitan',
            'katPermohonan_id' => '',
            'permohonan_tujuanBeli' => 'Tujuan Pembelian',
            'permohonan_jenisPeruntukan' => 'Jenis Peruntukan',
            'tahunSedia_id' => 'Sesi Pengajian / Tahun Peralatan Wajib Disediakan',
            'permohonan_lokasiCadangan' => 'Cadangan Lokasi Peralatan Ditempatkan Sekiranya Diluluskan',
            'statusPermohonan_id' => '',
            'file' => 'Buku Log',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getKatPermohonan()
    {
        return $this->hasOne(KatPermohonan::className(), ['permohonan_id' => 'permohonan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getKelulusanJk()
    {
        return $this->hasOne(KelulusanJk::className(), ['permohonan_id' => 'permohonan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getTahunSedia()
    {
        return $this->hasOne(TahunSedia::className(), ['permohonan_id' => 'permohonan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getBukuLog()
    {
        return $this->hasMany(BukuLog::className(), ['permohonan_id' => 'permohonan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getMohonBaru()
    {
        return $this->hasMany(MohonBaru::className(), ['permohonan_id' => 'permohonan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getPeralatan()
    {
        return $this->hasMany(Peralatan::className(), ['permohonan_id' => 'permohonan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getMesyuarat()
    {
        return $this->hasMany(Mesyuarat::className(), ['permohonan_id' => 'permohonan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getStatusPermohonan()
    {
        return $this->hasMany(StatusPermohonan::className(), ['permohonan_id' => 'permohonan_id']);
    }
}
