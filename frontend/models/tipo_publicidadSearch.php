<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tipopubicidad;

/**
 * tipo_publicidadSearch represents the model behind the search form about `app\models\Tipopubicidad`.
 */
class tipo_publicidadSearch extends Tipopubicidad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Descripcion', 'Duracion_paraMostrar'], 'safe'],
            [['Precio_TPubli'], 'number'],
            [['Caducidad', 'tipo_PubicidadID'], 'integer'],
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
        $query = Tipopubicidad::find();

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
            'Precio_TPubli' => $this->Precio_TPubli,
            'Duracion_paraMostrar' => $this->Duracion_paraMostrar,
            'Caducidad' => $this->Caducidad,
            'tipo_PubicidadID' => $this->tipo_PubicidadID,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion]);

        return $dataProvider;
    }
}
