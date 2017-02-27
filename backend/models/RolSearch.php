<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Rol;

/**
 * RolSearch represents the model behind the search form about `backend\models\Rol`.
 */
class RolSearch extends Rol
{
    public function rules()
    {
        return [
            [['rol_ID'], 'integer'],
            [['nombre_rol'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Rol::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'rol_ID' => $this->rol_ID,
        ]);

        $query->andFilterWhere(['like', 'nombre_rol', $this->nombre_rol]);

        return $dataProvider;
    }
}
