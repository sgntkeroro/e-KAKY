<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_statusMesyuarat".
 *
 * @property integer $statusMesyuarat_id
 * @property string $statusMesyuarat_nama
 */
class StatusMesyuarat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_statusMesyuarat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statusMesyuarat_nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'statusMesyuarat_id' => 'Status Mesyuarat ID',
            'statusMesyuarat_nama' => 'Status Mesyuarat Nama',
        ];
    }
}
