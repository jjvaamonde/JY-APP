<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuota_credito".
 *
 * @property integer $Cod_Pago
 * @property double $Monto_Cuota
 * @property string $Fecha_Cuota
 * @property integer $cuota_CreditoID
 */
class CuotaCredito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuota_credito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cod_Pago', 'cuota_CreditoID'], 'integer'],
            [['Monto_Cuota'], 'number'],
            [['Fecha_Cuota'], 'required'],
            [['Fecha_Cuota'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cod_Pago' => 'Cod  Pago',
            'Monto_Cuota' => 'Monto  Cuota',
            'Fecha_Cuota' => 'Fecha  Cuota',
            'cuota_CreditoID' => 'Cuota  Credito ID',
        ];
    }
}
