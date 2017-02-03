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
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tipo_Pago', 'Nombre_ServicioComprado', 'Fecha_Pago'], 'safe'],
            [['Monto_Total', 'Monto_Cancelado'], 'number'],
            [['Cod_Usuario', 'arr_Cuotas', 'Periodo_Cobro', 'pago_UsuarioID'], 'integer'],
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
        $query = PagoUsuario::find();

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
            'Monto_Total' => $this->Monto_Total,
            'Monto_Cancelado' => $this->Monto_Cancelado,
            'Cod_Usuario' => $this->Cod_Usuario,
            'Fecha_Pago' => $this->Fecha_Pago,
            'arr_Cuotas' => $this->arr_Cuotas,
            'Periodo_Cobro' => $this->Periodo_Cobro,
            'pago_UsuarioID' => $this->pago_UsuarioID,
        ]);

        $query->andFilterWhere(['like', 'Tipo_Pago', $this->Tipo_Pago])
            ->andFilterWhere(['like', 'Nombre_ServicioComprado', $this->Nombre_ServicioComprado]);

        return $dataProvider;
    }
}
