<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CuotaCreditoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuota-credito-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Cod_Pago') ?>

    <?= $form->field($model, 'Monto_Cuota') ?>

    <?= $form->field($model, 'Fecha_Cuota') ?>

    <?= $form->field($model, 'cuota_CreditoID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
