<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VentasUsuario;

/**
 * VentasUsuarioSearch represents the model behind the search form about `app\models\VentasUsuario`.
 */
class VentasUsuarioSearch extends VentasUsuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cod_Vendedor', 'Cod_Comprador', 'ventas_UsuarioID'], 'integer'],
            [['Fecha_Venta', 'Tipo_Pago'], 'safe'],
            [['Monto'], 'number'],
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
        $query = VentasUsuario::find();

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
            'Cod_Vendedor' => $this->Cod_Vendedor,
            'Fecha_Venta' => $this->Fecha_Venta,
            'Monto' => $this->Monto,
            'Cod_Comprador' => $this->Cod_Comprador,
            'ventas_UsuarioID' => $this->ventas_UsuarioID,
        ]);

        $query->andFilterWhere(['like', 'Tipo_Pago', $this->Tipo_Pago]);

        return $dataProvider;
    }
}
