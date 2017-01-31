<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnuncioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anuncio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'arr_Imagen') ?>

    <?= $form->field($model, 'Categoria') ?>

    <?= $form->field($model, 'Clasificacion') ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'DireccionVendedor') ?>

    <?php // echo $form->field($model, 'Titulo') ?>

    <?php // echo $form->field($model, 'Nombre_Vendedor') ?>

    <?php // echo $form->field($model, 'Cantidad_Articulo') ?>

    <?php // echo $form->field($model, 'Calificacion_Vendedor') ?>

    <?php // echo $form->field($model, 'Fecha_Publicacion') ?>

    <?php // echo $form->field($model, 'Fecha_Caducidad') ?>

    <?php // echo $form->field($model, 'anuncioID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
