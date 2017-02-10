<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VentasUsuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ventas-usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Cod_Vendedor')->textInput() ?>

    <?= $form->field($model, 'Fecha_Venta')->textInput() ?>

    <?= $form->field($model, 'Monto')->textInput() ?>

    <?= $form->field($model, 'Cod_Comprador')->textInput() ?>

    <?= $form->field($model, 'Tipo_Pago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ventas_UsuarioID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
