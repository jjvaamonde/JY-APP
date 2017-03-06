<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\VentasUsuario;

/**
 * VentasUsuarioSearch represents the model behind the search form about `backend\models\VentasUsuario`.
 */
class VentasUsuarioSearch extends VentasUsuario
{
    public function rules()
    {
        return [
            [['ventas_UsuarioID', 'usuarioVenID', 'usuarioComID', 'status_venta'], 'integer'],
            [['Fecha_Venta', 'Monto', 'Tipo_Pago'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = VentasUsuario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ventas_UsuarioID' => $this->ventas_UsuarioID,
            'usuarioVenID' => $this->usuarioVenID,
            'usuarioComID' => $this->usuarioComID,
            'Fecha_Venta' => $this->Fecha_Venta,
            'status_venta' => $this->status_venta,
        ]);

        $query->andFilterWhere(['like', 'Monto', $this->Monto])
            ->andFilterWhere(['like', 'Tipo_Pago', $this->Tipo_Pago]);

        return $dataProvider;
    }
}
