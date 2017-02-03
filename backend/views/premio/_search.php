<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PremioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="premio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Nombre_Premio') ?>

    <?= $form->field($model, 'Descripcion_Premio') ?>

    <?= $form->field($model, 'Tipo_Premio') ?>

    <?= $form->field($model, 'Duracion') ?>

    <?= $form->field($model, 'Valor_Premio') ?>

    <?php // echo $form->field($model, 'premioID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
