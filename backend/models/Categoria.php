<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property integer $categoriaID
 * @property string $Nombre_Categ
 * @property string $Descripcion_Cate
 * @property integer $Cantidad_SubCategoria
 * @property integer $status_cate
 *
 * @property JoinsubCategoriatocategoria[] $joinsubCategoriatocategorias
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_Categ', 'Descripcion_Cate', 'Cantidad_SubCategoria', 'status_cate'], 'required'],
            [['Cantidad_SubCategoria', 'status_cate'], 'integer'],
            [['Nombre_Categ', 'Descripcion_Cate'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoriaID' => 'Categoria ID',
            'Nombre_Categ' => 'Nombre  Categ',
            'Descripcion_Cate' => 'Descripcion  Cate',
            'Cantidad_SubCategoria' => 'Cantidad  Sub Categoria',
            'status_cate' => 'Status Cate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinsubCategoriatocategorias()
    {
        return $this->hasMany(JoinsubCategoriatocategoria::className(), ['categoriaID' => 'categoriaID']);
    }
}
