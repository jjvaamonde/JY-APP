<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SubCategoria;

/**
 * SubCategoriaSearch represents the model behind the search form about `backend\models\SubCategoria`.
 */
class SubCategoriaSearch extends SubCategoria
{
    public function rules()
    {
        return [
            [['sub_CategoriaID', 'categoriaID', 'status_sub'], 'integer'],
            [['Nombre_SubCat', 'Descripcion_Subcat'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = SubCategoria::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'sub_CategoriaID' => $this->sub_CategoriaID,
            'categoriaID' => $this->categoriaID,
            'status_sub' => $this->status_sub,
        ]);

        $query->andFilterWhere(['like', 'Nombre_SubCat', $this->Nombre_SubCat])
            ->andFilterWhere(['like', 'Descripcion_Subcat', $this->Descripcion_Subcat]);

        return $dataProvider;
    }
}
