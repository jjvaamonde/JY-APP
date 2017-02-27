<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\PagoUsuario $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="pago-usuario-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'Tipo_Pago' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Tipo  Pago...', 'maxlength' => 50]],

            'Cod_Usuario' => ['type' => TabularForm::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Cod  Usuario...']],

            'Nombre_ServicioComprado' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre  Servicio Comprado...', 'maxlength' => 50]],

            'Fecha_Pago' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'arr_Cuotas' => ['type' => TabularForm::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Arr  Cuotas...']],

            'Periodo_Cobro' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Periodo  Cobro...']],

            'pago_UsuarioID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Pago  Usuario ID...']],

            'Monto_Total' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Monto  Total...']],

            'Monto_Cancelado' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Monto  Cancelado...']],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
