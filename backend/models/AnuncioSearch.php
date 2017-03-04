<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Anuncio;

/**
 * AnuncioSearch represents the model behind the search form about `backend\models\Anuncio`.
 */
class AnuncioSearch extends Anuncio
{
    public function rules()
    {
        return [
            [['anuncioID', 'usuarioID', 'sub_categoriaID', 'Cantidad_Articulo', 'Calificacion_Vendedor', 'categoriaID', 'status_anuncio'], 'integer'],
            [['Titulo', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Fecha_Publicacion', 'Fecha_Caducidad', 'imagen'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Anuncio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'anuncioID' => $this->anuncioID,
            'usuarioID' => $this->usuarioID,
            'sub_categoriaID' => $this->sub_categoriaID,
            'Cantidad_Articulo' => $this->Cantidad_Articulo,
            'Calificacion_Vendedor' => $this->Calificacion_Vendedor,
            'Fecha_Publicacion' => $this->Fecha_Publicacion,
            'Fecha_Caducidad' => $this->Fecha_Caducidad,
            'categoriaID' => $this->categoriaID,
            'status_anuncio' => $this->status_anuncio,
        ]);

        $query->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Clasificacion', $this->Clasificacion])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'DireccionVendedor', $this->DireccionVendedor])
            ->andFilterWhere(['like', 'imagen', $this->imagen]);

        return $dataProvider;
    }
}
