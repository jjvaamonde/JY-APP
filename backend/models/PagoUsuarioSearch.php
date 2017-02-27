<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PagoUsuario;

/**
 * PagoUsuarioSearch represents the model behind the search form about `backend\models\PagoUsuario`.
 */
class PagoUsuarioSearch extends PagoUsuario
{
    public function rules()
    {
        return [
            [['pago_UsuarioID', 'UsuarioID', 'Cuotas', 'Periodo_Cobro', 'status_p_u'], 'integer'],
            [['Tipo_Pago', 'Monto_Total', 'Monto_Cancelado', 'Nombre_ServicioComprado', 'Fecha_Pago'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = PagoUsuario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'pago_UsuarioID' => $this->pago_UsuarioID,
            'UsuarioID' => $this->UsuarioID,
            'Cuotas' => $this->Cuotas,
            'Fecha_Pago' => $this->Fecha_Pago,
            'Periodo_Cobro' => $this->Periodo_Cobro,
            'status_p_u' => $this->status_p_u,
        ]);

        $query->andFilterWhere(['like', 'Tipo_Pago', $this->Tipo_Pago])
            ->andFilterWhere(['like', 'Monto_Total', $this->Monto_Total])
            ->andFilterWhere(['like', 'Monto_Cancelado', $this->Monto_Cancelado])
            ->andFilterWhere(['like', 'Nombre_ServicioComprado', $this->Nombre_ServicioComprado]);

        return $dataProvider;
    }
}
