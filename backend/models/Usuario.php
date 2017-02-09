<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $usuarioID
 * @property string $Rif_CI
 * @property string $Login
 * @property string $Clave
 * @property string $Nombre
 * @property string $Direccion
 * @property integer $Telefono
 * @property string $Correo_Electronico
 * @property string $auth_key
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $Avatar
 * @property integer $Calificacion
 * @property integer $Puntos
 * @property integer $Rol
 * @property string $Fecha_UltimaConexion
 * @property string $Cod_Referido
 * @property integer $paquete_PremiumID
 * @property integer $premioID
 * @property integer $publicidadID
 * @property integer $reclamosID
 * @property integer $status
 *
 * @property Anuncio $anuncio
 * @property Joinanunciotousuario[] $joinanunciotousuarios
 * @property JoinpagoUsuariotousuario[] $joinpagoUsuariotousuarios
 * @property JoinusuariototipoUsuario[] $joinusuariototipoUsuarios
 * @property JoinventasUsuariotousuario[] $joinventasUsuariotousuarios
 * @property PagoUsuario $pagoUsuario
 * @property Publicidad $publicidad
 * @property Reclamos $reclamos
 * @property PaquetePremium $paquetePremium
 * @property Premio $premio
 * @property Publicidad $publicidad0
 * @property Reclamos $reclamos0
 * @property VentasUsuario $ventasUsuario
 * @property VentasUsuario $ventasUsuario0
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
            [['Rif_CI', 'Login', 'Clave', 'Nombre', 'Direccion', 'Telefono', 'Correo_Electronico', 'auth_key', 'created_at', 'updated_at', 'password_hash', 'Avatar', 'Calificacion', 'Puntos', 'Rol', 'Fecha_UltimaConexion', 'Cod_Referido', 'status'], 'required'],
            [['Direccion'], 'string'],
            [['Telefono', 'created_at', 'updated_at', 'Calificacion', 'Puntos', 'Rol', 'paquete_PremiumID', 'premioID', 'publicidadID', 'reclamosID', 'status'], 'integer'],
            [['Fecha_UltimaConexion'], 'safe'],
            [['Rif_CI', 'Login', 'Clave', 'Nombre', 'Correo_Electronico', 'Avatar', 'Cod_Referido'], 'string', 'max' => 50],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['Rif_CI'], 'unique'],
            [['Login'], 'unique'],
            [['Clave'], 'unique'],
            [['paquete_PremiumID'], 'unique'],
            [['premioID'], 'unique'],
            [['publicidadID'], 'unique'],
            [['reclamosID'], 'unique'],
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
            'usuarioID' => 'Usuario ID',
            'Rif_CI' => 'Rif  Ci',
            'Login' => 'Login',
            'Clave' => 'Clave',
            'Nombre' => 'Nombre',
            'Direccion' => 'Direccion',
            'Telefono' => 'Telefono',
            'Correo_Electronico' => 'Correo  Electronico',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'Avatar' => 'Avatar',
            'Calificacion' => 'Calificacion',
            'Puntos' => 'Puntos',
            'Rol' => 'Rol',
            'Fecha_UltimaConexion' => 'Fecha  Ultima Conexion',
            'Cod_Referido' => 'Cod  Referido',
            'paquete_PremiumID' => 'Paquete  Premium ID',
            'premioID' => 'Premio ID',
            'publicidadID' => 'Publicidad ID',
            'reclamosID' => 'Reclamos ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnuncio()
    {
        return $this->hasOne(Anuncio::className(), ['Vendedor' => 'usuarioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinanunciotousuarios()
    {
        return $this->hasMany(Joinanunciotousuario::className(), ['usuarioID' => 'usuarioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinpagoUsuariotousuarios()
    {
        return $this->hasMany(JoinpagoUsuariotousuario::className(), ['usuarioID' => 'usuarioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinusuariototipoUsuarios()
    {
        return $this->hasMany(JoinusuariototipoUsuario::className(), ['usuarioID' => 'usuarioID']);
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
    public function getPagoUsuario()
    {
        return $this->hasOne(PagoUsuario::className(), ['UsuarioID' => 'usuarioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublicidad()
    {
        return $this->hasOne(Publicidad::className(), ['fk_usuario' => 'usuarioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReclamos()
    {
        return $this->hasOne(Reclamos::className(), ['Usuario' => 'usuarioID']);
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
    public function getPublicidad0()
    {
        return $this->hasOne(Publicidad::className(), ['publicidadID' => 'publicidadID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReclamos0()
    {
        return $this->hasOne(Reclamos::className(), ['reclamosID' => 'reclamosID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentasUsuario()
    {
        return $this->hasOne(VentasUsuario::className(), ['Cod_Comprador' => 'usuarioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentasUsuario0()
    {
        return $this->hasOne(VentasUsuario::className(), ['Vendedor' => 'usuarioID']);
    }
}
