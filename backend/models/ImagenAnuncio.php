<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "imagen_anuncio".
 *
 * @property integer $Imagenid
 * @property integer $AnuncioId
 * @property string $ruta
 * @property integer $status
 *
 * @property Anuncio $anuncio
 */
class ImagenAnuncio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imagen_anuncio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AnuncioId', 'ruta', 'status'], 'required'],
            [['AnuncioId', 'status'], 'integer'],
            [['ruta'], 'string', 'max' => 225],
            [['AnuncioId'], 'exist', 'skipOnError' => true, 'targetClass' => Anuncio::className(), 'targetAttribute' => ['AnuncioId' => 'anuncioID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Imagenid' => 'Imagenid',
            'AnuncioId' => 'Anuncio ID',
            'ruta' => 'Ruta',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnuncio()
    {
        return $this->hasOne(Anuncio::className(), ['anuncioID' => 'AnuncioId']);
    }
}
