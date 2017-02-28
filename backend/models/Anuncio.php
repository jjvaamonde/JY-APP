<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anuncio".
 *
 * @property integer $anuncioID
 * @property integer $usuarioID
 * @property integer $sub_categoriaID
 * @property string $Titulo
 * @property string $Clasificacion
 * @property string $Descripcion
 * @property string $DireccionVendedor
 * @property integer $Cantidad_Articulo
 * @property integer $Calificacion_Vendedor
 * @property string $Fecha_Publicacion
 * @property string $Fecha_Caducidad
 * @property integer $categoriaID
 * @property integer $status_anuncio
 *
 * @property JoinanunciototipoAnuncio[] $joinanunciototipoAnuncios
 * @property Joinanunciotousuario[] $joinanunciotousuarios
 * @property JoinsubCategoriatoanuncio[] $joinsubCategoriatoanuncios
 */
class Anuncio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imagenes;
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
            [['usuarioID', 'sub_categoriaID', 'Titulo', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Fecha_Publicacion', 'Fecha_Caducidad', 'categoriaID', 'status_anuncio'], 'required'],
            [['usuarioID', 'sub_categoriaID', 'Cantidad_Articulo', 'Calificacion_Vendedor', 'categoriaID', 'status_anuncio'], 'integer'],
            [['Descripcion'], 'string'],
            [['Fecha_Publicacion', 'Fecha_Caducidad'], 'safe'],
            [['Titulo'], 'string', 'max' => 50],
            [['Clasificacion'], 'string', 'max' => 10],
            [['DireccionVendedor'], 'string', 'max' => 255],
            [['imagenes','safe']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'anuncioID' => 'Anuncio ID',
            'usuarioID' => 'Usuario ID',
            'sub_categoriaID' => 'Sub Categoria ID',
            'Titulo' => 'Titulo',
            'Clasificacion' => 'Clasificacion',
            'Descripcion' => 'Descripcion',
            'DireccionVendedor' => 'Direccion Vendedor',
            'Cantidad_Articulo' => 'Cantidad  Articulo',
            'Calificacion_Vendedor' => 'Calificacion  Vendedor',
            'Fecha_Publicacion' => 'Fecha  Publicacion',
            'Fecha_Caducidad' => 'Fecha  Caducidad',
            'categoriaID' => 'Categoria ID',
            'status_anuncio' => 'Status Anuncio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinanunciototipoAnuncios()
    {
        return $this->hasMany(JoinanunciototipoAnuncio::className(), ['anuncioID' => 'anuncioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinanunciotousuarios()
    {
        return $this->hasMany(Joinanunciotousuario::className(), ['anuncioID' => 'anuncioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinsubCategoriatoanuncios()
    {
        return $this->hasMany(JoinsubCategoriatoanuncio::className(), ['anuncioID' => 'anuncioID']);
    }
    public function getImagenes()
    {
        return $this->hasMany(ImagenAnuncio::className() ,['imagenID' => 'imagenID']);

     
    }
}
