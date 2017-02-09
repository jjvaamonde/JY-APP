<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tipo_publicidadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipopubicidad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'Precio_TPubli') ?>

    <?= $form->field($model, 'Duracion_paraMostrar') ?>

    <?= $form->field($model, 'Caducidad') ?>

    <?php // echo $form->field($model, 'tipo_PubicidadID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
