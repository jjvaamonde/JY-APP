<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anuncio;

/**
 * AnuncioSearch represents the model behind the search form about `app\models\Anuncio`.
 */
class AnuncioSearch extends Anuncio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['arr_Imagen', 'Clasificacion', 'Descripcion', 'DireccionVendedor', 'Titulo', 'Nombre_Vendedor', 'Fecha_Publicacion'], 'safe'],
            [['Categoria', 'Cantidad_Articulo', 'Calificacion_Vendedor', 'Fecha_Caducidad', 'anuncioID'], 'integer'],
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
            'Categoria' => $this->Categoria,
            'Cantidad_Articulo' => $this->Cantidad_Articulo,
            'Calificacion_Vendedor' => $this->Calificacion_Vendedor,
            'Fecha_Publicacion' => $this->Fecha_Publicacion,
            'Fecha_Caducidad' => $this->Fecha_Caducidad,
            'anuncioID' => $this->anuncioID,
        ]);

        $query->andFilterWhere(['like', 'arr_Imagen', $this->arr_Imagen])
            ->andFilterWhere(['like', 'Clasificacion', $this->Clasificacion])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'DireccionVendedor', $this->DireccionVendedor])
            ->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Nombre_Vendedor', $this->Nombre_Vendedor]);

        return $dataProvider;
    }
}
