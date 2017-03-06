<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "operacion".
 *
 * @property integer $operacionID
 * @property string $nombre_op
 */
class Operacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_op'], 'required'],
            [['nombre_op'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'operacionID' => 'Operación ID',
=======
            'operacion_ID' => 'Operación ID',
>>>>>>> origin/cambios-jose
            'nombre_op' => 'Nombre Operación',
        ];
    }
}
