<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Premio;

/**
 * PremioSearch represents the model behind the search form about `app\models\Premio`.
 */
class PremioSearch extends Premio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_Premio', 'Descripcion_Premio', 'Tipo_Premio'], 'safe'],
            [['Duracion', 'Valor_Premio', 'premioID'], 'integer'],
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
        $query = Premio::find();

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
            'Duracion' => $this->Duracion,
            'Valor_Premio' => $this->Valor_Premio,
            'premioID' => $this->premioID,
        ]);

        $query->andFilterWhere(['like', 'Nombre_Premio', $this->Nombre_Premio])
            ->andFilterWhere(['like', 'Descripcion_Premio', $this->Descripcion_Premio])
            ->andFilterWhere(['like', 'Tipo_Premio', $this->Tipo_Premio]);

        return $dataProvider;
    }
}
