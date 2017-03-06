<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\UserSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'usuarioID') ?>

    <?= $form->field($model, 'Rif_CI') ?>

    <?= $form->field($model, 'username') ?>

    <?= //$form->field($model, 'premioID') ?>

    <?= //$form->field($model, 'paquete_premiunID') ?>

    <?php // echo $form->field($model, 'publicidadID') ?>

    <?php  echo $form->field($model, 'Nombre') ?>

    <?php // echo $form->field($model, 'Direccion') ?>

    <?php // echo $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'auth_key') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'password_hash') ?>

    <?php // echo $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'Avatar') ?>

    <?php // echo $form->field($model, 'Calificacion') ?>

    <?php // echo $form->field($model, 'Puntos') ?>

    <?php // echo $form->field($model, 'rol_ID') ?>

    <?php // echo $form->field($model, 'Fecha_UltimaConexion') ?>

    <?php // echo $form->field($model, 'Cod_Referido') ?>

    <?php // echo $form->field($model, 'reclamosID') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
