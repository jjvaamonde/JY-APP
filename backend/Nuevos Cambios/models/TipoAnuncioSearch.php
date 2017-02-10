<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TipoAnuncio;

/**
 * TipoAnuncioSearch represents the model behind the search form about `backend\models\TipoAnuncio`.
 */
class TipoAnuncioSearch extends TipoAnuncio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_TipoAnuncio', 'Descripcion_TipoAnun', 'Posicion_video', 'Posicion_Info', 'Posiscion_Imagen', 'Posicion_Descripcion', 'Posicion_Titulo'], 'safe'],
            [['Cantidad_Imagenes', 'Ancho_TipoAnun', 'Alto_TipoAnun', 'tipo_AnuncioID'], 'integer'],
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
        $query = TipoAnuncio::find();

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
            'Cantidad_Imagenes' => $this->Cantidad_Imagenes,
            'Ancho_TipoAnun' => $this->Ancho_TipoAnun,
            'Alto_TipoAnun' => $this->Alto_TipoAnun,
            'tipo_AnuncioID' => $this->tipo_AnuncioID,
        ]);

        $query->andFilterWhere(['like', 'Nombre_TipoAnuncio', $this->Nombre_TipoAnuncio])
            ->andFilterWhere(['like', 'Descripcion_TipoAnun', $this->Descripcion_TipoAnun])
            ->andFilterWhere(['like', 'Posicion_video', $this->Posicion_video])
            ->andFilterWhere(['like', 'Posicion_Info', $this->Posicion_Info])
            ->andFilterWhere(['like', 'Posiscion_Imagen', $this->Posiscion_Imagen])
            ->andFilterWhere(['like', 'Posicion_Descripcion', $this->Posicion_Descripcion])
            ->andFilterWhere(['like', 'Posicion_Titulo', $this->Posicion_Titulo]);

        return $dataProvider;
    }
}
