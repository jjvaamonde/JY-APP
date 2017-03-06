<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\PremioSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="premio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'premioID') ?>

    <?= $form->field($model, 'Nombre_Premio') ?>

    <?= $form->field($model, 'Descripcion_Premio') ?>

    <?= $form->field($model, 'Tipo_Premio') ?>

    <?= $form->field($model, 'Duracion') ?>

    <?php // echo $form->field($model, 'Valor_Premio') ?>

    <?php // echo $form->field($model, 'status_pre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
