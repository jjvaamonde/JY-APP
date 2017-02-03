<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property string $Nombre_Categ
 * @property string $Descripcion_Cate
 * @property string $arr_SubCategoria
 * @property integer $categoriaID
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
            [['Nombre_Categ', 'Descripcion_Cate', 'arr_SubCategoria', 'categoriaID'], 'required'],
            [['categoriaID'], 'integer'],
            [['Nombre_Categ', 'Descripcion_Cate', 'arr_SubCategoria'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nombre_Categ' => 'Nombre  Categ',
            'Descripcion_Cate' => 'Descripcion  Cate',
            'arr_SubCategoria' => 'Arr  Sub Categoria',
            'categoriaID' => 'Categoria ID',
        ];
    }
}
