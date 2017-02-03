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
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cod_Pago', 'cuota_CreditoID'], 'integer'],
            [['Monto_Cuota'], 'number'],
            [['Fecha_Cuota'], 'safe'],
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
        $query = CuotaCredito::find();

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
            'Cod_Pago' => $this->Cod_Pago,
            'Monto_Cuota' => $this->Monto_Cuota,
            'Fecha_Cuota' => $this->Fecha_Cuota,
            'cuota_CreditoID' => $this->cuota_CreditoID,
        ]);

        return $dataProvider;
    }
}
