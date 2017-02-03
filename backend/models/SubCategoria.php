<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sub_categoria".
 *
 * @property string $Nombre_SubCat
 * @property string $Descripcion_Subcat
 * @property integer $Cod_Categoria
 * @property integer $sub_CategoriaID
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
            [['Nombre_SubCat', 'Descripcion_Subcat', 'Cod_Categoria', 'sub_CategoriaID'], 'required'],
            [['Cod_Categoria', 'sub_CategoriaID'], 'integer'],
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
            'Nombre_SubCat' => 'Nombre  Sub Cat',
            'Descripcion_Subcat' => 'Descripcion  Subcat',
            'Cod_Categoria' => 'Cod  Categoria',
            'sub_CategoriaID' => 'Sub  Categoria ID',
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
