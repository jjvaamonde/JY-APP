<?php

namespace backend\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property integer $rol_ID
 * @property string $nombre_rol
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_rol'], 'required'],
            [['nombre_rol'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rol_ID' => 'Rol  ID',
            'nombre_rol' => 'Nombre Rol',
        ];
    }
    public function getUsers()
 
    {
            return $this->hasMany(User::className(), ['rol_id' => 'id']);
    }

}
