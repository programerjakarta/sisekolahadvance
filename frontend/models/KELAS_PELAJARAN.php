<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "KELAS_PELAJARAN".
 *
 * @property integer $ID_KELAS
 * @property integer $ID_PELAJARAN
 * @property string $HARI
 * @property string $JAM_MULAI
 * @property string $JAM_SELESAI
 *
 * @property KELAS $iDKELAS
 * @property PELAJARAN $iDPELAJARAN
 */
class KELAS_PELAJARAN extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'KELAS_PELAJARAN';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_KELAS', 'ID_PELAJARAN'], 'required'],
            [['ID_KELAS', 'ID_PELAJARAN'], 'integer'],
            [['HARI', 'JAM_MULAI', 'JAM_SELESAI'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_KELAS' => 'Id  Kelas',
            'ID_PELAJARAN' => 'Id  Pelajaran',
            'HARI' => 'Hari',
            'JAM_MULAI' => 'Jam  Mulai',
            'JAM_SELESAI' => 'Jam  Selesai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDKELAS()
    {
        return $this->hasOne(KELAS::className(), ['ID_KELAS' => 'ID_KELAS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDPELAJARAN()
    {
        return $this->hasOne(PELAJARAN::className(), ['ID_PELAJARAN' => 'ID_PELAJARAN']);
    }
}
