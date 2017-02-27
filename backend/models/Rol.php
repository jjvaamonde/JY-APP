<?php

namespace backend\models;
use common\models\User;
use backend\models\RolOperacion;
use backend\models\Operacion;


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
    public $operaciones;
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
            [['operaciones'], 'safe'],
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
            return $this->hasMany(User::className(), ['rol_ID' => 'id']);
    }

    public function afterSave($insert, $changedAttributes)
    {
    \Yii::$app->db->createCommand()->delete('rol_operacion', 'rol_ID = '.(int) $this->id)->execute();
 
    foreach ($this->operaciones as $id) 
        {
        $ro = new RolOperacion();
        $ro->rol_ID = $this->id;
        $ro->operacion_ID = $id;
        $ro->save();
        }
    }

    public function getRolOperaciones()
    {
        return $this->hasMany(RolOperacion::className(), ['rol_ID' => 'id']);
    }
     
    public function getOperacionesPermitidas()
    {
        return $this->hasMany(Operacion::className(), ['id' => 'operacion_ID'])
            ->viaTable('rol_operacion', ['rol_ID' => 'id']);
    }
     
    public function getOperacionesPermitidasList()
    {
        return $this->getOperacionesPermitidas()->asArray();
    }



}
