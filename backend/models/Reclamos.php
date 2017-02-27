<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reclamos".
 *
 * @property integer $reclamosID
 * @property integer $Usuario
 * @property string $Descripcion
 * @property string $Motivo
 * @property string $Fecha
 * @property string $Estado_reclamo
 * @property integer $status
 *
 * @property Usuario $usuario
 * @property Usuario $usuario0
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
            [['Usuario', 'Descripcion', 'Motivo', 'Fecha', 'status'], 'required'],
            [['Usuario', 'status'], 'integer'],
            [['Fecha'], 'safe'],
            [['Descripcion'], 'string', 'max' => 255],
            [['Motivo', 'Estado_reclamo'], 'string', 'max' => 50],
            [['Usuario'], 'unique'],
            [['Usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['Usuario' => 'usuarioID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reclamosID' => 'Reclamos ID',
            'Usuario' => 'Usuario',
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
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['usuarioID' => 'Usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario0()
    {
        return $this->hasOne(Usuario::className(), ['reclamosID' => 'reclamosID']);
    }
}
