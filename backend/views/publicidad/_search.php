<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PublicidadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicidad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Titulo') ?>

    <?= $form->field($model, 'Cod_Usuario') ?>

    <?= $form->field($model, 'Fecha_Inicial') ?>

    <?= $form->field($model, 'Fecha_Final') ?>

    <?= $form->field($model, 'Imagen_Publicitaria') ?>

    <?php // echo $form->field($model, 'Duracion') ?>

    <?php // echo $form->field($model, 'Enlace') ?>

    <?php // echo $form->field($model, 'publicidadID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
