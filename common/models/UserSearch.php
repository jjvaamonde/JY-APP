<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;

/**
 * UserSearch represents the model behind the search form about `common\models\User`.
 */
class UserSearch extends User
{
    public function rules()
    {
        return [
            [['usuarioID', 'premioID', 'paquete_premiunID', 'publicidadID', 'Telefono', 'created_at', 'updated_at', 'Calificacion', 'Puntos', 'rol_ID', 'reclamosID', 'status'], 'integer'],
            [['Rif_CI', 'username', 'Nombre', 'Direccion', 'email', 'auth_key', 'password_hash', 'password_reset_token', 'Avatar', 'Fecha_UltimaConexion', 'Cod_Referido'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'usuarioID' => $this->usuarioID,
            'premioID' => $this->premioID,
            'paquete_premiunID' => $this->paquete_premiunID,
            'publicidadID' => $this->publicidadID,
            'Telefono' => $this->Telefono,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'Calificacion' => $this->Calificacion,
            'Puntos' => $this->Puntos,
            'rol_ID' => $this->rol_ID,
            'Fecha_UltimaConexion' => $this->Fecha_UltimaConexion,
            'reclamosID' => $this->reclamosID,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'Rif_CI', $this->Rif_CI])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'Avatar', $this->Avatar])
            ->andFilterWhere(['like', 'Cod_Referido', $this->Cod_Referido]);

        return $dataProvider;
    }
}
