<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Reclamos $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="reclamos-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'Usuario' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Usuario...']],

            'Descripcion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Descripcion...', 'maxlength' => 255]],

            'Motivo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Motivo...', 'maxlength' => 50]],

            'Fecha' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'status' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status...']],

            'Estado_reclamo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Estado Reclamo...', 'maxlength' => 50]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
