<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_pubicidad".
 *
 * @property string $Nombre
 * @property string $Descripcion
 * @property double $Precio_TPubli
 * @property string $Duracion_paraMostrar
 * @property integer $Caducidad
 * @property integer $tipo_PubicidadID
 */
class TipoPubicidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_pubicidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Precio_TPubli'], 'number'],
            [['Duracion_paraMostrar'], 'safe'],
            [['Caducidad', 'tipo_PubicidadID'], 'integer'],
            [['tipo_PubicidadID'], 'required'],
            [['Nombre', 'Descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'Precio_TPubli' => 'Precio  Tpubli',
            'Duracion_paraMostrar' => 'Duracion Para Mostrar',
            'Caducidad' => 'Caducidad',
            'tipo_PubicidadID' => 'Tipo  Pubicidad ID',
        ];
    }
}
