<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CuotaCredito;

/**
 * CuotaCreditoSearch represents the model behind the search form about `app\models\CuotaCredito`.
 */
class CuotaCreditoSearch extends CuotaCredito
{
    public function rules()
    {
        return [
            [['cuota_CreditoID', 'Cod_Pago', 'status_cuota'], 'integer'],
            [['Monto_Cuota', 'Fecha_Cuota'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = CuotaCredito::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'cuota_CreditoID' => $this->cuota_CreditoID,
            'Cod_Pago' => $this->Cod_Pago,
            'Fecha_Cuota' => $this->Fecha_Cuota,
            'status_cuota' => $this->status_cuota,
        ]);

        $query->andFilterWhere(['like', 'Monto_Cuota', $this->Monto_Cuota]);

        return $dataProvider;
    }
}
