<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "GURU".
 *
 * @property integer $ID_GURU
 * @property integer $ID_KELAS
 * @property string $NAMA
 * @property string $ALAMAT
 */
class GURU extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'GURU';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_KELAS'], 'integer'],
            [['NAMA', 'ALAMAT'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_GURU' => 'Id  Guru',
            'ID_KELAS' => 'Id  Kelas',
            'NAMA' => 'Nama',
            'ALAMAT' => 'Alamat',
        ];
    }
}
