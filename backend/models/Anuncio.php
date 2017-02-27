<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anuncio".
 *
 * @property integer $anuncioID
 * @property integer $Vendedor
 * @property integer $Sub_categoria
 * @property string $Titulo
 * @property string $Clasificacion
 * @property string $Descripcion
 * @property string $DireccionVendedor
 * @property integer $Cantidad_Articulo
 * @property string $Calificacion_Vendedor
 * @property string $Fecha_Publicacion
 * @property string $Fecha_Caducidad
 * @property string $Imagen
 * @property integer $status_anuncio
 *
 * @property ImagenAnuncio[] $imagenAnuncios
 * @property JoinanunciototipoAnuncio[] $joinanunciototipoAnuncios
 * @property Joinanunciotousuario[] $joinanunciotousuarios
 * @property JoinsubCategoriatoanuncio[] $joinsubCategoriatoanuncios
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
            [['Vendedor', 'Sub_categoria', 'Titulo', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Fecha_Publicacion', 'Fecha_Caducidad', 'Imagen'], 'required'],
            [['Vendedor', 'Sub_categoria', 'Cantidad_Articulo', 'Fecha_Caducidad', 'status_anuncio'], 'integer'],
            [['Descripcion', 'Imagen'], 'string'],
            [['Calificacion_Vendedor'], 'number'],
            [['Fecha_Publicacion'], 'safe'],
            [['Titulo'], 'string', 'max' => 50],
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
            'anuncioID' => 'Anuncio ID',
            'Vendedor' => 'Vendedor',
            'Sub_categoria' => 'Sub Categoria',
            'Titulo' => 'Titulo',
            'Clasificacion' => 'Clasificacion',
            'Descripcion' => 'Descripcion',
            'DireccionVendedor' => 'Direccion Vendedor',
            'Cantidad_Articulo' => 'Cantidad  Articulo',
            'Calificacion_Vendedor' => 'Calificacion  Vendedor',
            'Fecha_Publicacion' => 'Fecha  Publicacion',
            'Fecha_Caducidad' => 'Fecha  Caducidad',
            'Imagen' => 'Imagen',
            'status_anuncio' => 'Status Anuncio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagenAnuncios()
    {
        return $this->hasMany(ImagenAnuncio::className(), ['AnuncioId' => 'anuncioID']);
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
}
