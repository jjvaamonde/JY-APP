<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pago_usuario".
 *
 * @property string $Tipo_Pago
 * @property double $Monto_Total
 * @property double $Monto_Cancelado
 * @property integer $Cod_Usuario
 * @property string $Nombre_ServicioComprado
 * @property string $Fecha_Pago
 * @property integer $arr_Cuotas
 * @property integer $Periodo_Cobro
 * @property integer $pago_UsuarioID
 */
class PagoUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pago_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tipo_Pago', 'Cod_Usuario', 'Nombre_ServicioComprado', 'Fecha_Pago', 'arr_Cuotas', 'Periodo_Cobro', 'pago_UsuarioID'], 'required'],
            [['Monto_Total', 'Monto_Cancelado'], 'number'],
            [['Cod_Usuario', 'arr_Cuotas', 'Periodo_Cobro', 'pago_UsuarioID'], 'integer'],
            [['Fecha_Pago'], 'safe'],
            [['Tipo_Pago', 'Nombre_ServicioComprado'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Tipo_Pago' => 'Tipo  Pago',
            'Monto_Total' => 'Monto  Total',
            'Monto_Cancelado' => 'Monto  Cancelado',
            'Cod_Usuario' => 'Cod  Usuario',
            'Nombre_ServicioComprado' => 'Nombre  Servicio Comprado',
            'Fecha_Pago' => 'Fecha  Pago',
            'arr_Cuotas' => 'Arr  Cuotas',
            'Periodo_Cobro' => 'Periodo  Cobro',
            'pago_UsuarioID' => 'Pago  Usuario ID',
        ];
    }
}
