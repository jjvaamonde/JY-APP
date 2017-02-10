<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ventas_usuario".
 *
 * @property integer $Cod_Vendedor
 * @property string $Fecha_Venta
 * @property double $Monto
 * @property integer $Cod_Comprador
 * @property string $Tipo_Pago
 * @property integer $ventas_UsuarioID
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
            [['Cod_Vendedor', 'Fecha_Venta', 'Monto', 'Cod_Comprador', 'Tipo_Pago', 'ventas_UsuarioID'], 'required'],
            [['Cod_Vendedor', 'Cod_Comprador', 'ventas_UsuarioID'], 'integer'],
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
            'Cod_Vendedor' => 'Cod  Vendedor',
            'Fecha_Venta' => 'Fecha  Venta',
            'Monto' => 'Monto',
            'Cod_Comprador' => 'Cod  Comprador',
            'Tipo_Pago' => 'Tipo  Pago',
            'ventas_UsuarioID' => 'Ventas  Usuario ID',
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
