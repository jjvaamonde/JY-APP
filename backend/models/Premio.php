<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "premio".
 *
 * @property string $Nombre_Premio
 * @property string $Descripcion_Premio
 * @property string $Tipo_Premio
 * @property integer $Duracion
 * @property integer $Valor_Premio
 * @property integer $premioID
 *
 * @property Usuario[] $usuarios
 */
class Premio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'premio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_Premio', 'Descripcion_Premio', 'Tipo_Premio', 'Duracion', 'Valor_Premio'], 'required'],
            [['Duracion', 'Valor_Premio', 'premioID'], 'integer'],
            [['Nombre_Premio', 'Descripcion_Premio', 'Tipo_Premio'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nombre_Premio' => 'Nombre del premio',
            'Descripcion_Premio' => 'Descripción del premio',
            'Tipo_Premio' => 'Tipo de premio',
            'Duracion' => 'Duración (días)',
            'Valor_Premio' => 'Valor del premio',
            'premioID' => 'Premio ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['premioID' => 'premioID']);
    }
}
