<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Publicidad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicidad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cod_Usuario')->textInput() ?>

    <?= $form->field($model, 'Fecha_Inicial')->textInput() ?>

    <?= $form->field($model, 'Fecha_Final')->textInput() ?>

    <?= $form->field($model, 'Imagen_Publicitaria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Duracion')->textInput() ?>

    <?= $form->field($model, 'Enlace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publicidadID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
