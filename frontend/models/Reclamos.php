<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reclamos".
 *
 * @property string $Fecha
 * @property string $Motivo
 * @property string $Descripcion
 * @property string $Estatus
 * @property integer $reclamosID
 *
 * @property Usuario[] $usuarios
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
            [['Fecha'], 'safe'],
            [['reclamosID'], 'required'],
            [['reclamosID'], 'integer'],
            [['Motivo', 'Descripcion', 'Estatus'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Fecha' => 'Fecha',
            'Motivo' => 'Motivo',
            'Descripcion' => 'Descripcion',
            'Estatus' => 'Estatus',
            'reclamosID' => 'Reclamos ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['reclamosID' => 'reclamosID']);
    }
}
