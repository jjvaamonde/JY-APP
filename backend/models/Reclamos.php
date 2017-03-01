<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reclamos".
 *
 * @property integer $reclamosID
 * @property integer $usuarioID
 * @property string $Descripcion
 * @property string $Motivo
 * @property string $Fecha
 * @property string $Estado_reclamo
 * @property integer $status
 *
 * @property User $user
 */
class Reclamos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reclamos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuarioID', 'Descripcion', 'Motivo', 'Fecha', 'status'], 'required'],
            [['usuarioID', 'status'], 'integer'],
            [['Fecha'], 'safe'],
            [['Descripcion'], 'string', 'max' => 255],
            [['Motivo', 'Estado_reclamo'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reclamosID' => 'Reclamos ID',
            'usuarioID' => 'Usuario ID',
            'Descripcion' => 'Descripcion',
            'Motivo' => 'Motivo',
            'Fecha' => 'Fecha',
            'Estado_reclamo' => 'Estado Reclamo',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['reclamosID' => 'reclamosID']);
    }
}
