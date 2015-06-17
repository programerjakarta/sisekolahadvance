<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "SISWA".
 *
 * @property integer $ID_SISWA
 * @property string $NAMA_LENGKAP
 * @property string $ALAMAT_KOTA
 * @property string $ALAMAT_RINCI
 * @property integer $KELAS
 *
 * @property ABSENSI[] $aBSENSIs
 * @property KELAS $kELAS
 */
class SISWA extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SISWA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KELAS'], 'integer'],
            [['NAMA_LENGKAP'], 'string', 'max' => 50],
            [['ALAMAT_KOTA', 'ALAMAT_RINCI'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_SISWA' => 'Id  Siswa',
            'NAMA_LENGKAP' => 'Nama  Lengkap',
            'ALAMAT_KOTA' => 'Alamat  Kota',
            'ALAMAT_RINCI' => 'Alamat  Rinci',
            'KELAS' => 'Kelas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getABSENSIs()
    {
        return $this->hasMany(ABSENSI::className(), ['ID_SISWA' => 'ID_SISWA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKELAS()
    {
        return $this->hasOne(KELAS::className(), ['ID_KELAS' => 'KELAS']);
    }
}
