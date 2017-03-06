<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rol_operacion".
 *
 * @property integer $rol_ID
 * @property integer $operacion_ID
 */
class RolOperacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rol_operacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rol_ID', 'operacion_ID'], 'required'],
            [['rol_ID', 'operacion_ID'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rol_ID' => 'Rol  ID',
            'operacion_ID' => 'Operacion  ID',
        ];
    }
}
