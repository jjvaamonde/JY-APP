<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Categoria $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="categoria-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'Nombre_Categ' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre  Categ...', 'maxlength' => 50]],

            'Descripcion_Cate' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Descripcion  Cate...', 'maxlength' => 50]],

            'Cantidad_SubCategoria' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Cantidad  Sub Categoria...']],

            'status_cate' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status Cate...']],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
