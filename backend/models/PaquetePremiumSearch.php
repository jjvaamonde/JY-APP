<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PaquetePremium;

/**
 * PaquetePremiumSearch represents the model behind the search form about `backend\models\PaquetePremium`.
 */
class PaquetePremiumSearch extends PaquetePremium
{
    public function rules()
    {
        return [
            [['paquete_PremiumID', 'Duracion_PP', 'estado', 'statusPP'], 'integer'],
            [['Nombre_PP', 'Descripcion_PP', 'Precio_PP', 'Tipo_PP'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = PaquetePremium::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'paquete_PremiumID' => $this->paquete_PremiumID,
            'Duracion_PP' => $this->Duracion_PP,
            'estado' => $this->estado,
            'statusPP' => $this->statusPP,
        ]);

        $query->andFilterWhere(['like', 'Nombre_PP', $this->Nombre_PP])
            ->andFilterWhere(['like', 'Descripcion_PP', $this->Descripcion_PP])
            ->andFilterWhere(['like', 'Precio_PP', $this->Precio_PP])
            ->andFilterWhere(['like', 'Tipo_PP', $this->Tipo_PP]);

        return $dataProvider;
    }
}
