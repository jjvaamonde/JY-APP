<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var app\models\CuotaCredito $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="cuota-credito-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'Cod_Pago' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Cod  Pago...']],

            'Monto_Cuota' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Monto  Cuota...']],

            'Fecha_Cuota' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
