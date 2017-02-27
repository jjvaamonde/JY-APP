<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var app\models\Premio $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="premio-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'Nombre_Premio' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre  Premio...', 'maxlength' => 50]],

            'Descripcion_Premio' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Descripcion  Premio...', 'maxlength' => 50]],

            'Tipo_Premio' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Tipo  Premio...', 'maxlength' => 50]],

            'Duracion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Duracion...']],

            'Valor_Premio' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Valor  Premio...']],

           ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
