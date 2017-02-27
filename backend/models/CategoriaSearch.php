<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Categoria;

/**
 * CategoriaSearch represents the model behind the search form about `backend\models\Categoria`.
 */
class CategoriaSearch extends Categoria
{
    public function rules()
    {
        return [
            [['categoriaID', 'Cantidad_SubCategoria', 'status_cate'], 'integer'],
            [['Nombre_Categ', 'Descripcion_Cate'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Categoria::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'categoriaID' => $this->categoriaID,
            'Cantidad_SubCategoria' => $this->Cantidad_SubCategoria,
            'status_cate' => $this->status_cate,
        ]);

        $query->andFilterWhere(['like', 'Nombre_Categ', $this->Nombre_Categ])
            ->andFilterWhere(['like', 'Descripcion_Cate', $this->Descripcion_Cate]);

        return $dataProvider;
    }
}
