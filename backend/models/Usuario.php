<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $Nombre
 * @property string $Direccion
 * @property integer $Telefono
 * @property string $Correo_Electronico
 * @property string $Rif_CI
 * @property string $Login
 * @property string $Clave
 * @property string $auth_key
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $status
 * @property string $Avatar
 * @property integer $Calificacion
 * @property integer $Puntos
 * @property integer $Rol
 * @property string $Fecha_UltimaConexion
 * @property string $Cod_Referido
 * @property integer $usuarioID
 * @property integer $paquete_PremiumID
 * @property integer $premioID
 * @property integer $publicidadID
 * @property integer $reclamosID
 *
 * @property JoinventasUsuariotousuario[] $joinventasUsuariotousuarios
 * @property PaquetePremium $paquetePremium
 * @property Premio $premio
 * @property Publicidad $publicidad
 * @property Reclamos $reclamos
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Direccion', 'Telefono', 'Correo_Electronico', 'Rif_CI', 'Login', 'Clave', 'auth_key', 'created_at', 'updated_at', 'password_hash', 'Avatar', 'Calificacion', 'Puntos', 'Rol', 'Fecha_UltimaConexion', 'Cod_Referido', 'usuarioID'], 'required'],
            [['Direccion'], 'string'],
            [['Telefono', 'created_at', 'updated_at', 'status', 'Calificacion', 'Puntos', 'Rol', 'usuarioID', 'paquete_PremiumID', 'premioID', 'publicidadID', 'reclamosID'], 'integer'],
            [['Fecha_UltimaConexion'], 'safe'],
            [['Nombre', 'Correo_Electronico', 'Rif_CI', 'Login', 'Clave', 'Avatar', 'Cod_Referido'], 'string', 'max' => 50],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['paquete_PremiumID'], 'exist', 'skipOnError' => true, 'targetClass' => PaquetePremium::className(), 'targetAttribute' => ['paquete_PremiumID' => 'paquete_PremiumID']],
            [['premioID'], 'exist', 'skipOnError' => true, 'targetClass' => Premio::className(), 'targetAttribute' => ['premioID' => 'premioID']],
            [['publicidadID'], 'exist', 'skipOnError' => true, 'targetClass' => Publicidad::className(), 'targetAttribute' => ['publicidadID' => 'publicidadID']],
            [['reclamosID'], 'exist', 'skipOnError' => true, 'targetClass' => Reclamos::className(), 'targetAttribute' => ['reclamosID' => 'reclamosID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nombre' => 'Nombre',
            'Direccion' => 'Direccion',
            'Telefono' => 'Telefono',
            'Correo_Electronico' => 'Correo  Electronico',
            'Rif_CI' => 'Rif  Ci',
            'Login' => 'Login',
            'Clave' => 'Clave',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'Avatar' => 'Avatar',
            'Calificacion' => 'Calificacion',
            'Puntos' => 'Puntos',
            'Rol' => 'Rol',
            'Fecha_UltimaConexion' => 'Fecha  Ultima Conexion',
            'Cod_Referido' => 'Cod  Referido',
            'usuarioID' => 'Usuario ID',
            'paquete_PremiumID' => 'Paquete  Premium ID',
            'premioID' => 'Premio ID',
            'publicidadID' => 'Publicidad ID',
            'reclamosID' => 'Reclamos ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinventasUsuariotousuarios()
    {
        return $this->hasMany(JoinventasUsuariotousuario::className(), ['usuarioID' => 'usuarioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaquetePremium()
    {
        return $this->hasOne(PaquetePremium::className(), ['paquete_PremiumID' => 'paquete_PremiumID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPremio()
    {
        return $this->hasOne(Premio::className(), ['premioID' => 'premioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublicidad()
    {
        return $this->hasOne(Publicidad::className(), ['publicidadID' => 'publicidadID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReclamos()
    {
        return $this->hasOne(Reclamos::className(), ['reclamosID' => 'reclamosID']);
    }
}
