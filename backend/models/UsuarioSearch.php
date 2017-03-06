<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form about `backend\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    public function rules()
    {
        return [
            [['usuarioID', 'Telefono', 'created_at', 'updated_at', 'Calificacion', 'Puntos', 'Rol', 'paquete_PremiumID', 'premioID', 'publicidadID', 'reclamosID', 'status'], 'integer'],
            [['Rif_CI', 'Login', 'Clave', 'Nombre', 'Direccion', 'Correo_Electronico', 'auth_key', 'password_hash', 'password_reset_token', 'Avatar', 'Fecha_UltimaConexion', 'Cod_Referido'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Usuario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'usuarioID' => $this->usuarioID,
            'Telefono' => $this->Telefono,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'Calificacion' => $this->Calificacion,
            'Puntos' => $this->Puntos,
            'Rol' => $this->Rol,
            'Fecha_UltimaConexion' => $this->Fecha_UltimaConexion,
            'paquete_PremiumID' => $this->paquete_PremiumID,
            'premioID' => $this->premioID,
            'publicidadID' => $this->publicidadID,
            'reclamosID' => $this->reclamosID,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'Rif_CI', $this->Rif_CI])
            ->andFilterWhere(['like', 'Login', $this->Login])
            ->andFilterWhere(['like', 'Clave', $this->Clave])
            ->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Correo_Electronico', $this->Correo_Electronico])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'Avatar', $this->Avatar])
            ->andFilterWhere(['like', 'Cod_Referido', $this->Cod_Referido]);

        return $dataProvider;
    }
}
