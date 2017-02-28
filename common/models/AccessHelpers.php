<?php
namespace common\models;

use yii;


class AccessHelpers {

    public static function getAcceso($operacion)
    {
        $connection = \Yii::$app->db;
        $sql = "SELECT o.nombre_op
                FROM user u
                JOIN rol r ON u.rol_ID = r.rol_ID
                JOIN rol_operacion ro ON r.rol_ID = ro.rol_ID
                JOIN operacion o ON ro.operacion_ID = o.operacion_ID
                WHERE o.nombre_op =:operacion
                AND u.rol_ID =:rol_ID";
        $command = $connection->createCommand($sql);
        $command->bindValue(":operacion", $operacion);
        $command->bindValue(":rol_ID", Yii::$app->user->identity->rol_ID);
        $result = $command->queryOne();

        if ($result['nombre_op'] != null){
            return true;
        } else {
            return false;
        }
    }

}