<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Publicidad;

/**
 * PublicidadSearch represents the model behind the search form about `backend\models\Publicidad`.
 */
class PublicidadSearch extends Publicidad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Titulo', 'Fecha_Inicial', 'Fecha_Final', 'Imagen_Publicitaria', 'Duracion', 'Enlace'], 'safe'],
            [['Cod_Usuario', 'publicidadID'], 'integer'],
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
        $query = Publicidad::find();

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
            'Cod_Usuario' => $this->Cod_Usuario,
            'Fecha_Inicial' => $this->Fecha_Inicial,
            'Fecha_Final' => $this->Fecha_Final,
            'Duracion' => $this->Duracion,
            'publicidadID' => $this->publicidadID,
        ]);

        $query->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Imagen_Publicitaria', $this->Imagen_Publicitaria])
            ->andFilterWhere(['like', 'Enlace', $this->Enlace]);

        return $dataProvider;
    }
}
