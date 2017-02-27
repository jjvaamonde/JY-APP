<?php

namespace common\models;
use backend\models\Rol;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $usuarioID
 * @property string $Rif_CI
 * @property string $Login
 * @property string $Clave
 * @property integer $premioID
 * @property integer $paquete_premiunID
 * @property integer $publicidadID
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
 * @property integer $rol_id
 * @property string $Fecha_UltimaConexion
 * @property string $Cod_Referido
 * @property integer $reclamosID
 * @property integer $status
 *
 * @property Joinanunciotousuario[] $joinanunciotousuarios
 * @property JoinpagoUsuariotousuario[] $joinpagoUsuariotousuarios
 * @property JoinusuariototipoUsuario[] $joinusuariototipoUsuarios
 * @property JoinventasUsuariotousuario[] $joinventasUsuariotousuarios
 * @property Reclamos $reclamos
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Rif_CI', 'Login', 'Clave', 'premioID', 'paquete_premiunID', 'publicidadID', 'Nombre', 'Direccion', 'Telefono', 'Correo_Electronico', 'auth_key', 'created_at', 'updated_at', 'password_hash', 'Avatar', 'Calificacion', 'Puntos', 'rol_id', 'Fecha_UltimaConexion', 'Cod_Referido'], 'required'],
            [['premioID', 'paquete_premiunID', 'publicidadID', 'Telefono', 'created_at', 'updated_at', 'Calificacion', 'Puntos', 'rol_id', 'reclamosID', 'status'], 'integer'],
            [['Direccion'], 'string'],
            [['Fecha_UltimaConexion'], 'safe'],
            [['Rif_CI', 'Login', 'Clave', 'Nombre', 'Correo_Electronico', 'Avatar', 'Cod_Referido'], 'string', 'max' => 50],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['Rif_CI'], 'unique'],
            [['Login'], 'unique'],
            [['Clave'], 'unique'],
            [['reclamosID'], 'unique'],
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
            'premioID' => 'Premio ID',
            'paquete_premiunID' => 'Paquete Premiun ID',
            'publicidadID' => 'Publicidad ID',
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
            'rol_id' => 'Rol ID',
            'Fecha_UltimaConexion' => 'Fecha  Ultima Conexion',
            'Cod_Referido' => 'Cod  Referido',
            'reclamosID' => 'Reclamos ID',
            'status' => 'Status',
        ];
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
    public function getReclamos()
    {
        return $this->hasOne(Reclamos::className(), ['reclamosID' => 'reclamosID']);
    }
}
