<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "publicidad".
 *
 * @property string $Titulo
 * @property integer $Cod_Usuario
 * @property string $Fecha_Inicial
 * @property string $Fecha_Final
 * @property string $Imagen_Publicitaria
 * @property string $Duracion
 * @property string $Enlace
 * @property integer $publicidadID
 *
 * @property Usuario[] $usuarios
 */
class Publicidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publicidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Titulo', 'Cod_Usuario', 'Fecha_Inicial', 'Fecha_Final', 'Imagen_Publicitaria', 'Duracion', 'Enlace', 'publicidadID'], 'required'],
            [['Cod_Usuario', 'publicidadID'], 'integer'],
            [['Fecha_Inicial', 'Fecha_Final', 'Duracion'], 'safe'],
            [['Titulo', 'Imagen_Publicitaria', 'Enlace'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Titulo' => 'Titulo',
            'Cod_Usuario' => 'Cod  Usuario',
            'Fecha_Inicial' => 'Fecha  Inicial',
            'Fecha_Final' => 'Fecha  Final',
            'Imagen_Publicitaria' => 'Imagen  Publicitaria',
            'Duracion' => 'Duracion',
            'Enlace' => 'Enlace',
            'publicidadID' => 'Publicidad ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['publicidadID' => 'publicidadID']);
    }
}
