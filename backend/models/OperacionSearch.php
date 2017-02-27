<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Operacion;

/**
 * OperacionSearch represents the model behind the search form about `app\models\Operacion`.
 */
class OperacionSearch extends Operacion
{
    public function rules()
    {
        return [
            [['operacionID'], 'integer'],
            [['nombre_op'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Operacion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'operacionID' => $this->operacionID,
        ]);

        $query->andFilterWhere(['like', 'nombre_op', $this->nombre_op]);

        return $dataProvider;
    }
}
