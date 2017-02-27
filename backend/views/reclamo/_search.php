<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\ReclamoSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="reclamos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'reclamosID') ?>

    <?= $form->field($model, 'Usuario') ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'Motivo') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?php // echo $form->field($model, 'Estado_reclamo') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
