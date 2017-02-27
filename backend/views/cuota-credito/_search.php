<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\CuotaCreditoSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="cuota-credito-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cuota_CreditoID') ?>

    <?= $form->field($model, 'Cod_Pago') ?>

    <?= $form->field($model, 'Monto_Cuota') ?>

    <?= $form->field($model, 'Fecha_Cuota') ?>

    <?= $form->field($model, 'status_cuota') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
