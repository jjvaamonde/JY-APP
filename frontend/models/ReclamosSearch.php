<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reclamos;

/**
 * ReclamosSearch represents the model behind the search form about `app\models\Reclamos`.
 */
class ReclamosSearch extends Reclamos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Fecha', 'Motivo', 'Descripcion', 'Estatus'], 'safe'],
            [['reclamosID'], 'integer'],
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
        $query = Reclamos::find();

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
            'Fecha' => $this->Fecha,
            'reclamosID' => $this->reclamosID,
        ]);

        $query->andFilterWhere(['like', 'Motivo', $this->Motivo])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
