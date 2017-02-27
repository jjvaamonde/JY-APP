<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\SubCategoria $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="sub-categoria-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'categoriaID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Categoria ID...']],

            'Nombre_SubCat' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre  Sub Cat...', 'maxlength' => 50]],

            'Descripcion_Subcat' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Descripcion  Subcat...', 'maxlength' => 50]],

            'status_sub' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status Sub...']],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
