<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\AnuncioSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="anuncio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'anuncioID') ?>

    <?= $form->field($model, 'usuarioID') ?>

    <?= $form->field($model, 'sub_categoriaID') ?>

    <?= $form->field($model, 'Titulo') ?>

    <?= $form->field($model, 'Clasificacion') ?>

    <?php // echo $form->field($model, 'Descripcion') ?>

    <?php // echo $form->field($model, 'DireccionVendedor') ?>

    <?php // echo $form->field($model, 'Cantidad_Articulo') ?>

    <?php // echo $form->field($model, 'Calificacion_Vendedor') ?>

    <?php // echo $form->field($model, 'Fecha_Publicacion') ?>

    <?php // echo $form->field($model, 'Fecha_Caducidad') ?>

    <?php // echo $form->field($model, 'categoriaID') ?>

    <?php // echo $form->field($model, 'imagen') ?>

    <?php // echo $form->field($model, 'status_anuncio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
