<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TipoAnuncioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-anuncio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Nombre_TipoAnuncio') ?>

    <?= $form->field($model, 'Descripcion_TipoAnun') ?>

    <?= $form->field($model, 'Cantidad_Imagenes') ?>

    <?= $form->field($model, 'Ancho_TipoAnun') ?>

    <?= $form->field($model, 'Alto_TipoAnun') ?>

    <?php // echo $form->field($model, 'Posicion_video') ?>

    <?php // echo $form->field($model, 'Posicion_Info') ?>

    <?php // echo $form->field($model, 'Posiscion_Imagen') ?>

    <?php // echo $form->field($model, 'Posicion_Descripcion') ?>

    <?php // echo $form->field($model, 'Posicion_Titulo') ?>

    <?php // echo $form->field($model, 'tipo_AnuncioID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
