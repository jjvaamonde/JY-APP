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
     */  const STATUS_DELETED = 0;
       const STATUS_ACTIVE = 1;
       const ROLE_USER = 1;



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
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['rol_ID','default','value'=>self::ROLE_USER],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
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

    public static function findIdentity($id)
    {
        return static::findOne(['usuarioID' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
    public function setRol()
    {
        $this->rol_ID = ROLE_USER;
    }
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
