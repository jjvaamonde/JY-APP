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
            [['anuncioID', 'Vendedor', 'Sub_categoria', 'Cantidad_Articulo', 'Fecha_Caducidad', 'status_anuncio'], 'integer'],
            [['Titulo', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Fecha_Publicacion', 'Imagen'], 'safe'],
            [['Calificacion_Vendedor'], 'number'],
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
            'Sub_categoria' => $this->Sub_categoria,
            'Cantidad_Articulo' => $this->Cantidad_Articulo,
            'Calificacion_Vendedor' => $this->Calificacion_Vendedor,
            'Fecha_Publicacion' => $this->Fecha_Publicacion,
            'Fecha_Caducidad' => $this->Fecha_Caducidad,
            'status_anuncio' => $this->status_anuncio,
        ]);

        $query->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Clasificacion', $this->Clasificacion])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'DireccionVendedor', $this->DireccionVendedor])
            ->andFilterWhere(['like', 'Imagen', $this->Imagen]);

        return $dataProvider;
    }
}
