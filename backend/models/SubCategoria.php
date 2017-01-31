<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_categoria".
 *
 * @property string $Nombre_SubCat
 * @property string $Descripcion_Subcat
 * @property string $Cod_Categoria
 * @property integer $sub_CategoriaID
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
            [['sub_CategoriaID'], 'integer'],
            [['Nombre_SubCat', 'Descripcion_Subcat', 'Cod_Categoria'], 'string', 'max' => 50],
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
}
