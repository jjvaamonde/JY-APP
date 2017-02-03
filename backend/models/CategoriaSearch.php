<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Categoria;

/**
 * CategoriaSearch represents the model behind the search form about `backend\models\Categoria`.
 */
class CategoriaSearch extends Categoria
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_Categ', 'Descripcion_Cate', 'arr_SubCategoria'], 'safe'],
            [['categoriaID'], 'integer'],
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
        $query = Categoria::find();

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
            'categoriaID' => $this->categoriaID,
        ]);

        $query->andFilterWhere(['like', 'Nombre_Categ', $this->Nombre_Categ])
            ->andFilterWhere(['like', 'Descripcion_Cate', $this->Descripcion_Cate])
            ->andFilterWhere(['like', 'arr_SubCategoria', $this->arr_SubCategoria]);

        return $dataProvider;
    }
}
