<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\PaquetePremium $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="paquete-premium-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'Nombre_PP' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre  Pp...', 'maxlength' => 50]],

            'Descripcion_PP' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Descripcion  Pp...', 'maxlength' => 50]],

            'Precio_PP' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Precio  Pp...']],

            'Duracion_PP' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Duracion  Pp...']],

            'Tipo_PP' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Tipo  Pp...', 'maxlength' => 50]],

            'statusPP' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status Pp...']],

            'estado' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Estado...']],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
