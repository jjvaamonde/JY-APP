<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "paquete_premium".
 *
 * @property integer $paquete_PremiumID
 * @property string $Nombre_PP
 * @property string $Descripcion_PP
 * @property double $Precio_PP
 * @property integer $Duracion_PP
 * @property string $Tipo_PP
 * @property integer $estado
 * @property integer $statusPP
 *
 * @property JointipoAnunciotopaquetePremium[] $jointipoAnunciotopaquetePremia
 */
class PaquetePremium extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paquete_premium';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_PP', 'Descripcion_PP', 'Precio_PP', 'Duracion_PP', 'Tipo_PP', 'statusPP'], 'required'],
            [['Precio_PP'], 'number'],
            [['Duracion_PP', 'estado', 'statusPP'], 'integer'],
            [['Nombre_PP', 'Descripcion_PP', 'Tipo_PP'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'paquete_PremiumID' => 'Paquete  Premium ID',
            'Nombre_PP' => 'Nombre  Pp',
            'Descripcion_PP' => 'Descripcion  Pp',
            'Precio_PP' => 'Precio  Pp',
            'Duracion_PP' => 'Duracion  Pp',
            'Tipo_PP' => 'Tipo  Pp',
            'estado' => 'Estado',
            'statusPP' => 'Status Pp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJointipoAnunciotopaquetePremia()
    {
        return $this->hasMany(JointipoAnunciotopaquetePremium::className(), ['paquete_PremiumID' => 'paquete_PremiumID']);
    }
}
