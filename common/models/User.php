<?php

namespace common\models;
use backend\models\Reclamos;
use backend\models\Rol;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $usuarioID
 * @property string $Rif_CI
 * @property string $username
 * @property integer $premioID
 * @property integer $paquete_premiunID
 * @property integer $publicidadID
 * @property string $Nombre
 * @property string $Direccion
 * @property integer $Telefono
 * @property string $email
 * @property string $auth_key
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $Avatar
 * @property integer $Calificacion
 * @property integer $Puntos
 * @property integer $rol_ID
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
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
     public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
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
            [[ 'username', 'email', 'password_hash', 'status'], 'required'],
            [['premioID', 'paquete_premiunID', 'publicidadID', 'Telefono', 'created_at', 'updated_at', 'Calificacion', 'Puntos', 'rol_ID', 'reclamosID', 'status'], 'integer'],
            [['Direccion'], 'string'],
            [['Fecha_UltimaConexion'], 'safe'],
            [['Rif_CI', 'username', 'Nombre', 'email', 'Avatar', 'Cod_Referido'], 'string', 'max' => 50],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['Rif_CI'], 'unique'],
            [['username'], 'unique'],
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
            'Rif_CI' => 'Rif/Ci',
            'username' => 'Username',
            'Nombre' => 'Nombre',
            'Direccion' => 'Dirección',
            'Telefono' => 'Teléfono',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'Avatar' => 'Avatar',
            'Calificacion' => 'Calificación',
            'Puntos' => 'Puntos',
            'rol_ID' => 'Rol',
            'premioID' => 'Premio',
            'paquete_premiunID' => 'Paquete Premium',
            'publicidadID' => 'Publicidad',
            'Fecha_UltimaConexion' => 'Fecha última conexión',
            'Cod_Referido' => 'Codigo Referido',
            'reclamosID' => 'Reclamos',
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
    public function getRol()
    {
            return $this->hasOne(Rol::className(), ['rol_ID' => 'rol_ID']);
    }
}
