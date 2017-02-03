<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sub_categoria".
 *
 * @property integer $sub_CategoriaID
 * @property string $Nombre_SubCat
 * @property string $Descripcion_Subcat
 * @property integer $Cod_Categoria
 *
 * @property Categoria $codCategoria
 */
class SubCategoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_categoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_SubCat', 'Descripcion_Subcat', 'Cod_Categoria'], 'required'],
            [['Cod_Categoria'], 'integer'],
            [['Nombre_SubCat', 'Descripcion_Subcat'], 'string', 'max' => 50],
            [['Cod_Categoria'], 'unique'],
            [['Cod_Categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['Cod_Categoria' => 'categoriaID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_CategoriaID' => 'Sub  Categoria ID',
            'Nombre_SubCat' => 'Nombre ',
            'Descripcion_Subcat' => 'Descripcion  ',
            'Cod_Categoria' => 'Categoria a la cual pertenece',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodCategoria()
    {
        return $this->hasOne(Categoria::className(), ['categoriaID' => 'Cod_Categoria']);
    }
}
