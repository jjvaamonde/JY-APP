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
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anuncioID', 'Vendedor', 'Sub_Categoria', 'Cantidad_Articulo', 'Calificacion_Vendedor', 'Fecha_Caducidad', 'CantImagen', 'status_anuncio'], 'integer'],
            [['Titulo', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Fecha_Publicacion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Anuncio::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
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
