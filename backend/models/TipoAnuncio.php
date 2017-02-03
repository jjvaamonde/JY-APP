<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipo_anuncio".
 *
 * @property string $Nombre_TipoAnuncio
 * @property string $Descripcion_TipoAnun
 * @property integer $Cantidad_Imagenes
 * @property integer $Ancho_TipoAnun
 * @property integer $Alto_TipoAnun
 * @property string $Posicion_video
 * @property string $Posicion_Info
 * @property string $Posiscion_Imagen
 * @property string $Posicion_Descripcion
 * @property string $Posicion_Titulo
 * @property integer $tipo_AnuncioID
 */
class TipoAnuncio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_anuncio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_TipoAnuncio', 'Descripcion_TipoAnun', 'Cantidad_Imagenes', 'Ancho_TipoAnun', 'Alto_TipoAnun', 'Posicion_video', 'Posicion_Info', 'Posiscion_Imagen', 'Posicion_Descripcion', 'Posicion_Titulo', 'tipo_AnuncioID'], 'required'],
            [['Cantidad_Imagenes', 'Ancho_TipoAnun', 'Alto_TipoAnun', 'tipo_AnuncioID'], 'integer'],
            [['Posicion_video', 'Posicion_Info', 'Posiscion_Imagen', 'Posicion_Descripcion', 'Posicion_Titulo'], 'string'],
            [['Nombre_TipoAnuncio', 'Descripcion_TipoAnun'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nombre_TipoAnuncio' => 'Nombre  Tipo Anuncio',
            'Descripcion_TipoAnun' => 'Descripcion  Tipo Anun',
            'Cantidad_Imagenes' => 'Cantidad  Imagenes',
            'Ancho_TipoAnun' => 'Ancho  Tipo Anun',
            'Alto_TipoAnun' => 'Alto  Tipo Anun',
            'Posicion_video' => 'Posicion Video',
            'Posicion_Info' => 'Posicion  Info',
            'Posiscion_Imagen' => 'Posiscion  Imagen',
            'Posicion_Descripcion' => 'Posicion  Descripcion',
            'Posicion_Titulo' => 'Posicion  Titulo',
            'tipo_AnuncioID' => 'Tipo  Anuncio ID',
        ];
    }
}
