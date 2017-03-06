<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reclamos;

/**
 * ReclamoSearch represents the model behind the search form about `backend\models\Reclamos`.
 */
class ReclamoSearch extends Reclamos
{
    public function rules()
    {
        return [
            [['reclamosID', 'usuarioID', 'status'], 'integer'],
            [['Descripcion', 'Motivo', 'Fecha', 'Estado_reclamo'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Reclamos::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'reclamosID' => $this->reclamosID,
            'usuarioID' => $this->usuarioID,
            'Fecha' => $this->Fecha,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'Motivo', $this->Motivo])
            ->andFilterWhere(['like', 'Estado_reclamo', $this->Estado_reclamo]);

        return $dataProvider;
    }
}
