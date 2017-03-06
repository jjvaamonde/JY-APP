<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ventas_usuario".
 *
 * @property integer $ventas_UsuarioID
 * @property integer $usuarioVenID
 * @property integer $usuarioComID
 * @property string $Fecha_Venta
 * @property double $Monto
 * @property string $Tipo_Pago
 * @property integer $status_venta
 *
 * @property JoinventasUsuariotousuario[] $joinventasUsuariotousuarios
 */
class VentasUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ventas_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuarioVenID', 'usuarioComID', 'Fecha_Venta', 'Monto', 'Tipo_Pago', 'status_venta'], 'required'],
            [['usuarioVenID', 'usuarioComID', 'status_venta'], 'integer'],
            [['Fecha_Venta'], 'safe'],
            [['Monto'], 'number'],
            [['Tipo_Pago'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ventas_UsuarioID' => 'Ventas  Usuario ID',
            'usuarioVenID' => 'Usuario Ven ID',
            'usuarioComID' => 'Usuario Com ID',
            'Fecha_Venta' => 'Fecha  Venta',
            'Monto' => 'Monto',
            'Tipo_Pago' => 'Tipo  Pago',
            'status_venta' => 'Status Venta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinventasUsuariotousuarios()
    {
        return $this->hasMany(JoinventasUsuariotousuario::className(), ['ventas_UsuarioID' => 'ventas_UsuarioID']);
    }
}
