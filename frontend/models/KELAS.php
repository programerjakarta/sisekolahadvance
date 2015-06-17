<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "KELAS".
 *
 * @property integer $ID_KELAS
 * @property string $NAMA_KELAS
 *
 * @property GURU[] $gURUs
 * @property KELASPELAJARAN[] $kELASPELAJARANs
 * @property PELAJARAN[] $iDPELAJARANs
 * @property SISWA[] $sISWAs
 */
class KELAS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'KELAS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NAMA_KELAS'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_KELAS' => 'Id  Kelas',
            'NAMA_KELAS' => 'Nama  Kelas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGURUs()
    {
        return $this->hasMany(GURU::className(), ['ID_KELAS' => 'ID_KELAS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKELASPELAJARANs()
    {
        return $this->hasMany(KELASPELAJARAN::className(), ['ID_KELAS' => 'ID_KELAS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDPELAJARANs()
    {
        return $this->hasMany(PELAJARAN::className(), ['ID_PELAJARAN' => 'ID_PELAJARAN'])->viaTable('KELAS_PELAJARAN', ['ID_KELAS' => 'ID_KELAS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSISWAs()
    {
        return $this->hasMany(SISWA::className(), ['KELAS' => 'ID_KELAS']);
    }
}
