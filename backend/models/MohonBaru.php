<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_mohonBaru".
 *
 * @property integer $mohonBaru_id
 * @property integer $permohonan_id
 * @property string $mohonBaru_program
 * @property string $mohonBaru_tahapPengajian
 */
class MohonBaru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_mohonBaru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permohonan_id'], 'integer'],
            [['mohonBaru_program', 'mohonBaru_tahapPengajian'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mohonBaru_id' => 'Mohon Baru ID',
            'permohonan_id' => 'Permohonan ID',
            'mohonBaru_program' => 'Mohon Baru Program',
            'mohonBaru_tahapPengajian' => 'Mohon Baru Tahap Pengajian',
        ];
    }
}
