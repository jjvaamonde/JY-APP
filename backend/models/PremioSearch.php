<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Premio;

/**
 * PremioSearch represents the model behind the search form about `backend\models\Premio`.
 */
class PremioSearch extends Premio
{
    public function rules()
    {
        return [
            [['premioID', 'Duracion', 'Valor_Premio', 'status_pre'], 'integer'],
            [['Nombre_Premio', 'Descripcion_Premio', 'Tipo_Premio'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Premio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'premioID' => $this->premioID,
            'Duracion' => $this->Duracion,
            'Valor_Premio' => $this->Valor_Premio,
            'status_pre' => $this->status_pre,
        ]);

        $query->andFilterWhere(['like', 'Nombre_Premio', $this->Nombre_Premio])
            ->andFilterWhere(['like', 'Descripcion_Premio', $this->Descripcion_Premio])
            ->andFilterWhere(['like', 'Tipo_Premio', $this->Tipo_Premio]);

        return $dataProvider;
    }
}
