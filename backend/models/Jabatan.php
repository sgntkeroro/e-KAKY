<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_jabatan".
 *
 * @property integer $jabatan_id
 * @property string $jabatan_nama
 */
class Jabatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_jabatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jabatan_nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jabatan_id' => 'Jabatan ID',
            'jabatan_nama' => 'Jabatan Nama',
        ];
    }
}
