<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Anuncio;

/**
 * AuncioSearch represents the model behind the search form about `backend\models\Anuncio`.
 */
class AuncioSearch extends Anuncio
{
    public function rules()
    {
        return [
            [['anuncioID', 'Vendedor', 'Sub_Categoria', 'Cantidad_Articulo', 'Calificacion_Vendedor', 'Fecha_Caducidad', 'CantImagen', 'status_anuncio'], 'integer'],
            [['Titulo', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Fecha_Publicacion'], 'safe'],
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
            'Vendedor' => $this->Vendedor,
            'Sub_Categoria' => $this->Sub_Categoria,
            'Cantidad_Articulo' => $this->Cantidad_Articulo,
            'Calificacion_Vendedor' => $this->Calificacion_Vendedor,
            'Fecha_Publicacion' => $this->Fecha_Publicacion,
            'Fecha_Caducidad' => $this->Fecha_Caducidad,
            'CantImagen' => $this->CantImagen,
            'status_anuncio' => $this->status_anuncio,
        ]);

        $query->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Clasificacion', $this->Clasificacion])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'DireccionVendedor', $this->DireccionVendedor]);

        return $dataProvider;
    }
}
