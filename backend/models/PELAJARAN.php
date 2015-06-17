<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "PELAJARAN".
 *
 * @property integer $ID_PELAJARAN
 * @property string $NAMA_PELAJARAN
 *
 * @property KELASPELAJARAN[] $kELASPELAJARANs
 * @property KELAS[] $iDKELASs
 */
class PELAJARAN extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PELAJARAN';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NAMA_PELAJARAN'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PELAJARAN' => 'Id  Pelajaran',
            'NAMA_PELAJARAN' => 'Nama  Pelajaran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKELASPELAJARANs()
    {
        return $this->hasMany(KELASPELAJARAN::className(), ['ID_PELAJARAN' => 'ID_PELAJARAN']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDKELASs()
    {
        return $this->hasMany(KELAS::className(), ['ID_KELAS' => 'ID_KELAS'])->viaTable('KELAS_PELAJARAN', ['ID_PELAJARAN' => 'ID_PELAJARAN']);
    }
}
