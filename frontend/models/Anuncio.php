<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anuncio".
 *
 * @property string $arr_Imagen
 * @property integer $Categoria
 * @property string $Clasificacion
 * @property string $Descripcion
 * @property string $DireccionVendedor
 * @property string $Titulo
 * @property string $Nombre_Vendedor
 * @property integer $Cantidad_Articulo
 * @property integer $Calificacion_Vendedor
 * @property string $Fecha_Publicacion
 * @property string $Fecha_Caducidad
 * @property integer $anuncioID
 */
class Anuncio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anuncio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['arr_Imagen', 'Categoria', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Titulo', 'Nombre_Vendedor', 'Fecha_Publicacion', 'Fecha_Caducidad', 'anuncioID'], 'required'],
            [['Categoria', 'Cantidad_Articulo', 'Calificacion_Vendedor', 'Fecha_Caducidad', 'anuncioID'], 'integer'],
            [['Descripcion'], 'string'],
            [['Fecha_Publicacion'], 'safe'],
            [['arr_Imagen', 'Titulo', 'Nombre_Vendedor'], 'string', 'max' => 50],
            [['Clasificacion'], 'string', 'max' => 10],
            [['DireccionVendedor'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'arr_Imagen' => 'Arr  Imagen',
            'Categoria' => 'Categoria',
            'Clasificacion' => 'Clasificacion',
            'Descripcion' => 'Descripcion',
            'DireccionVendedor' => 'Direccion Vendedor',
            'Titulo' => 'Titulo',
            'Nombre_Vendedor' => 'Nombre  Vendedor',
            'Cantidad_Articulo' => 'Cantidad  Articulo',
            'Calificacion_Vendedor' => 'Calificacion  Vendedor',
            'Fecha_Publicacion' => 'Fecha  Publicacion',
            'Fecha_Caducidad' => 'Fecha  Caducidad',
            'anuncioID' => 'Anuncio ID',
        ];
    }
}
