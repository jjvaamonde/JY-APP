<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VentasUsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ventas-usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Cod_Vendedor') ?>

    <?= $form->field($model, 'Fecha_Venta') ?>

    <?= $form->field($model, 'Monto') ?>

    <?= $form->field($model, 'Cod_Comprador') ?>

    <?= $form->field($model, 'Tipo_Pago') ?>

    <?php // echo $form->field($model, 'ventas_UsuarioID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
