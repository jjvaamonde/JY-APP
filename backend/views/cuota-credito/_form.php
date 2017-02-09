<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CuotaCredito */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuota-credito-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Cod_Pago')->textInput() ?>

    <?= $form->field($model, 'Monto_Cuota')->textInput() ?>

    <?= $form->field($model, 'Fecha_Cuota')->textInput() ?>

    <?= $form->field($model, 'cuota_CreditoID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
