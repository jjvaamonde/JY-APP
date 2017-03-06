<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "premio".
 *
 * @property integer $premioID
 * @property string $Nombre_Premio
 * @property string $Descripcion_Premio
 * @property string $Tipo_Premio
 * @property integer $Duracion
 * @property integer $Valor_Premio
 * @property integer $status_pre
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
            [['Nombre_Premio', 'Descripcion_Premio', 'Tipo_Premio', 'Duracion', 'Valor_Premio', 'status_pre'], 'required'],
            [['Duracion', 'Valor_Premio', 'status_pre'], 'integer'],
            [['Nombre_Premio', 'Descripcion_Premio', 'Tipo_Premio'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'premioID' => 'Premio ID',
            'Nombre_Premio' => 'Nombre  Premio',
            'Descripcion_Premio' => 'Descripcion  Premio',
            'Tipo_Premio' => 'Tipo  Premio',
            'Duracion' => 'Duracion',
            'Valor_Premio' => 'Valor  Premio',
            'status_pre' => 'Status Pre',
        ];
    }
}
