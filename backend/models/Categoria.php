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
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;
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
            ['status_cate', 'default', 'value' => self::STATUS_ACTIVE],
            ['status_cate', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoriaID' => 'Codigo Categoria',
            'Nombre_Categ' => 'Nombre ',
            'Descripcion_Cate' => 'Descripcion ',
            'Cantidad_SubCategoria' => 'Cantidad  de Sub Categorias',
            'status_cate' => 'Estado Categoria',
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
