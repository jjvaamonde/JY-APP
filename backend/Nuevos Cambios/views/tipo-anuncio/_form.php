<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TipoAnuncio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-anuncio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre_TipoAnuncio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion_TipoAnun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cantidad_Imagenes')->textInput() ?>

    <?= $form->field($model, 'Ancho_TipoAnun')->textInput() ?>

    <?= $form->field($model, 'Alto_TipoAnun')->textInput() ?>

    <?= $form->field($model, 'Posicion_video')->textInput() ?>

    <?= $form->field($model, 'Posicion_Info')->textInput() ?>

    <?= $form->field($model, 'Posiscion_Imagen')->textInput() ?>

    <?= $form->field($model, 'Posicion_Descripcion')->textInput() ?>

    <?= $form->field($model, 'Posicion_Titulo')->textInput() ?>

    <?= $form->field($model, 'tipo_AnuncioID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
