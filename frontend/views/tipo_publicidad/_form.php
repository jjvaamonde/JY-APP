<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tipopubicidad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipopubicidad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Precio_TPubli')->textInput() ?>

    <?= $form->field($model, 'Duracion_paraMostrar')->textInput() ?>

    <?= $form->field($model, 'Caducidad')->textInput() ?>

    <?= $form->field($model, 'tipo_PubicidadID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
