<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ABSENSI".
 *
 * @property integer $ID_ABSESNI
 * @property integer $ID_SISWA
 * @property string $TANGGAL
 * @property string $JAM_MASUK
 * @property string $JAM_PULANG
 *
 * @property SISWA $iDSISWA
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
            [['ID_ABSESNI'], 'required'],
            [['ID_ABSESNI', 'ID_SISWA'], 'integer'],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDSISWA()
    {
        return $this->hasOne(SISWA::className(), ['ID_SISWA' => 'ID_SISWA']);
    }
}
