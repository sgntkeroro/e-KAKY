<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_fakulti".
 *
 * @property integer $fakulti_id
 * @property string $fakulti_nama
 */
class Fakulti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_fakulti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fakulti_nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fakulti_id' => 'Fakulti ID',
            'fakulti_nama' => 'Fakulti Nama',
        ];
    }
}
