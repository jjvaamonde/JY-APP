<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PagoUsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pago-usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Tipo_Pago') ?>

    <?= $form->field($model, 'Monto_Total') ?>

    <?= $form->field($model, 'Monto_Cancelado') ?>

    <?= $form->field($model, 'Cod_Usuario') ?>

    <?= $form->field($model, 'Nombre_ServicioComprado') ?>

    <?php // echo $form->field($model, 'Fecha_Pago') ?>

    <?php // echo $form->field($model, 'arr_Cuotas') ?>

    <?php // echo $form->field($model, 'Periodo_Cobro') ?>

    <?php // echo $form->field($model, 'pago_UsuarioID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
