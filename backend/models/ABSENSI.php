<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ABSENSI".
 *
 * @property integer $ID_ABSESNI
 * @property integer $ID_SISWA
 * @property string $TANGGAL
 * @property string $JAM_MASUK
 * @property string $JAM_PULANG
 */
class ABSENSI extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ABSENSI';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_SISWA'], 'integer'],
            [['TANGGAL'], 'safe'],
            [['JAM_MASUK', 'JAM_PULANG'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_ABSESNI' => 'Id  Absesni',
            'ID_SISWA' => 'Id  Siswa',
            'TANGGAL' => 'Tanggal',
            'JAM_MASUK' => 'Jam  Masuk',
            'JAM_PULANG' => 'Jam  Pulang',
        ];
    }
}
