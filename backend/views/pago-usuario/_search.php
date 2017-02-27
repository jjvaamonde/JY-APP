<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\PagoUsuarioSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="pago-usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pago_UsuarioID') ?>

    <?= $form->field($model, 'UsuarioID') ?>

    <?= $form->field($model, 'Cuotas') ?>

    <?= $form->field($model, 'Tipo_Pago') ?>

    <?= $form->field($model, 'Monto_Total') ?>

    <?php // echo $form->field($model, 'Monto_Cancelado') ?>

    <?php // echo $form->field($model, 'Nombre_ServicioComprado') ?>

    <?php // echo $form->field($model, 'Fecha_Pago') ?>

    <?php // echo $form->field($model, 'Periodo_Cobro') ?>

    <?php // echo $form->field($model, 'status_p_u') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
