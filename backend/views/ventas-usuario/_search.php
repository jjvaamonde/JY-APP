<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\VentasUsuarioSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="ventas-usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ventas_UsuarioID') ?>

    <?= $form->field($model, 'usuarioVenID') ?>

    <?= $form->field($model, 'usuarioComID') ?>

    <?= $form->field($model, 'Fecha_Venta') ?>

    <?= $form->field($model, 'Monto') ?>

    <?php // echo $form->field($model, 'Tipo_Pago') ?>

    <?php // echo $form->field($model, 'status_venta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
