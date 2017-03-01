<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PagoUsuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pago-usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tipo_Pago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Monto_Total')->textInput() ?>

    <?= $form->field($model, 'Monto_Cancelado')->textInput() ?>

    <?= $form->field($model, 'Cod_Usuario')->textInput() ?>

    <?= $form->field($model, 'Nombre_ServicioComprado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fecha_Pago')->textInput() ?>

    <?= $form->field($model, 'arr_Cuotas')->textInput() ?>

    <?= $form->field($model, 'Periodo_Cobro')->textInput() ?>

    <?= $form->field($model, 'pago_UsuarioID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
