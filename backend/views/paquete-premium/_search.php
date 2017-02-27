<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\PaquetePremiumSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="paquete-premium-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'paquete_PremiumID') ?>

    <?= $form->field($model, 'Nombre_PP') ?>

    <?= $form->field($model, 'Descripcion_PP') ?>

    <?= $form->field($model, 'Precio_PP') ?>

    <?= $form->field($model, 'Duracion_PP') ?>

    <?php // echo $form->field($model, 'Tipo_PP') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'statusPP') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
