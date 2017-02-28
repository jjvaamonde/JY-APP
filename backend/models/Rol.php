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
<<<<<<< HEAD
            return $this->hasMany(User::className(), ['rol_ID' => 'rol_ID']);
=======
            return $this->hasMany(User::className(), ['rol_ID' => 'rol_ID']);
>>>>>>> origin/cambios-Yosbe
    }

    public function afterSave($insert, $changedAttributes)
    {
<<<<<<< HEAD
    \Yii::$app->db->createCommand()->delete('rol_operacion', 'rol_ID = '.(int) $this->rol_ID)->execute();
 
    foreach ($this->operaciones as $operacion_ID)
        {
        $ro = new RolOperacion();
        $ro->rol_ID = $this->rol_ID;
        $ro->operacion_ID = $operacion_ID;
=======
    \Yii::$app->db->createCommand()->delete('rol_operacion', 'rol_ID = '.(int) $this->id)->execute();

    foreach ($this->operaciones as $id)
        {
        $ro = new RolOperacion();
        $ro->rol_ID = $this->id;
        $ro->operacion_ID = $id;
>>>>>>> origin/cambios-Yosbe
        $ro->save();
        }
    }

    public function getRolOperaciones()
    {
<<<<<<< HEAD
        return $this->hasMany(RolOperacion::className(), ['rol_ID' => 'rol_ID']);
=======
        return $this->hasMany(RolOperacion::className(), ['rol_ID' => 'id']);
>>>>>>> origin/cambios-Yosbe
    }

    public function getOperacionesPermitidas()
    {
<<<<<<< HEAD
        return $this->hasMany(Operacion::className(), ['operacion_ID' => 'operacion_ID'])
            ->viaTable('rol_operacion', ['rol_ID' => 'rol_ID']);
=======
        return $this->hasMany(Operacion::className(), ['id' => 'operacion_ID'])
            ->viaTable('rol_operacion', ['rol_ID' => 'id']);
>>>>>>> origin/cambios-Yosbe
    }

    public function getOperacionesPermitidasList()
    {
        return $this->getOperacionesPermitidas()->asArray();
    }



}
