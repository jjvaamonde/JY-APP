<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sub_categoria".
 *
 * @property integer $sub_CategoriaID
 * @property integer $categoriaID
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
            [['categoriaID', 'Nombre_SubCat', 'Descripcion_Subcat', 'status_sub'], 'required'],
            [['categoriaID', 'status_sub'], 'integer'],
            [['Nombre_SubCat', 'Descripcion_Subcat'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_CategoriaID' => 'Sub  Categoria ID',
            'categoriaID' => 'Categoria ID',
            'Nombre_SubCat' => 'Nombre  Sub Cat',
            'Descripcion_Subcat' => 'Descripcion  Subcat',
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
