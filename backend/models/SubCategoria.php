<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sub_categoria".
 *
 * @property integer $sub_CategoriaID
 * @property integer $Cod_Categoria
 * @property string $Nombre_SubCat
 * @property string $Descripcion_Subcat
 * @property integer $status_sub
 *
 * @property JoinsubCategoriatoanuncio[] $joinsubCategoriatoanuncios
 * @property JoinsubCategoriatocategoria[] $joinsubCategoriatocategorias
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
            [['Cod_Categoria', 'Nombre_SubCat', 'Descripcion_Subcat', 'status_sub'], 'required'],
            [['Cod_Categoria', 'status_sub'], 'integer'],
            [['Nombre_SubCat', 'Descripcion_Subcat'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_CategoriaID' => 'Sub Categoria ID',
            'Cod_Categoria' => 'Categoria',
            'Nombre_SubCat' => 'Nombre Sub Categoria',
            'Descripcion_Subcat' => 'Descripcion Sub Categoria',
            'status_sub' => 'Status Sub',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinsubCategoriatoanuncios()
    {
        return $this->hasMany(JoinsubCategoriatoanuncio::className(), ['sub_CategoriaID' => 'sub_CategoriaID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinsubCategoriatocategorias()
    {
        return $this->hasMany(JoinsubCategoriatocategoria::className(), ['sub_CategoriaID' => 'sub_CategoriaID']);
    }
}
