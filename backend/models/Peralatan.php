<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_peralatan".
 *
 * @property integer $peralatan_id
 * @property integer $permohonan_id
 * @property string $peralatan_nama
 * @property integer $peralatan_kuantiti
 * @property string $peralatan_hargaSeunit
 */
class Peralatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_peralatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permohonan_id', 'peralatan_kuantiti'], 'integer'],
            [['peralatan_nama', 'peralatan_hargaSeunit'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'peralatan_id' => 'Peralatan ID',
            'permohonan_id' => 'Permohonan ID',
            'peralatan_nama' => 'Peralatan Nama',
            'peralatan_kuantiti' => 'Peralatan Kuantiti',
            'peralatan_hargaSeunit' => 'Peralatan Harga Seunit',
        ];
    }
}
