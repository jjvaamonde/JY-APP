<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anuncio".
 *
 * @property integer $anuncioID
 * @property integer $Vendedor
 * @property integer $Sub_Categoria
 * @property string $Titulo
 * @property string $Clasificacion
 * @property string $Descripcion
 * @property string $DireccionVendedor
 * @property integer $Cantidad_Articulo
 * @property integer $Calificacion_Vendedor
 * @property string $Fecha_Publicacion
 * @property string $Fecha_Caducidad
 * @property integer $CantImagen
 * @property integer $status_anuncio
 *
 * @property SubCategoria $subCategoria
 * @property Usuario $vendedor
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
            [['Vendedor', 'Sub_Categoria', 'Titulo', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Fecha_Publicacion', 'Fecha_Caducidad', 'CantImagen', 'status_anuncio'], 'required'],
            [['Vendedor', 'Sub_Categoria', 'Cantidad_Articulo', 'Calificacion_Vendedor', 'Fecha_Caducidad', 'CantImagen', 'status_anuncio'], 'integer'],
            [['Descripcion'], 'string'],
            [['Fecha_Publicacion'], 'safe'],
            [['Titulo'], 'string', 'max' => 50],
            [['Clasificacion'], 'string', 'max' => 10],
            [['DireccionVendedor'], 'string', 'max' => 255],
            [['Vendedor'], 'unique'],
            [['Sub_Categoria'], 'unique'],
            [['Sub_Categoria'], 'exist', 'skipOnError' => true, 'targetClass' => SubCategoria::className(), 'targetAttribute' => ['Sub_Categoria' => 'sub_CategoriaID']],
            [['Vendedor'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['Vendedor' => 'usuarioID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'anuncioID' => 'Codigo Anuncio',
            'Vendedor' => 'Nombre Vendedor',
            'Sub_Categoria' => 'Sub  Categoria del anuncio',
            'Titulo' => 'Titulo',
            'Clasificacion' => 'Clasificacion',
            'Descripcion' => 'Descripcion',
            'DireccionVendedor' => 'Direccion Vendedor',
            'Cantidad_Articulo' => 'Cantidad  Articulo',
            'Calificacion_Vendedor' => 'Calificacion  Vendedor',
            'Fecha_Publicacion' => 'Fecha  Publicacion',
            'Fecha_Caducidad' => 'Fecha  Caducidad en dias',
            'CantImagen' => 'Imagenes',
            'status_anuncio' => 'Status Anuncio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubCategoria()
    {
        return $this->hasOne(SubCategoria::className(), ['sub_CategoriaID' => 'Sub_Categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedor()
    {
        return $this->hasOne(Usuario::className(), ['usuarioID' => 'Vendedor']);
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
