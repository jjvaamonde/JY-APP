<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Premio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="premio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre_Premio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion_Premio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tipo_Premio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Duracion')->textInput() ?>

    <?= $form->field($model, 'Valor_Premio')->textInput() ?>

    <?= $form->field($model, 'premioID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
