<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'Rif_CI' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Rif  Ci...', 'maxlength' => 50]],

            'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Username...', 'maxlength' => 50]],

            'Nombre' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre...', 'maxlength' => 50]],

            'Direccion' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Direccion...','rows' => 6]],

            'Telefono' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Telefono...']],

            'email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Email...', 'maxlength' => 50]],

            'password_hash' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Password Hash...', 'maxlength' => 255]],

            'rol_ID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Rol  ID...']],

            'Fecha_UltimaConexion' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'Calificacion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Calificacion...']],

            'Puntos' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Puntos...']],

            'Avatar' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Avatar...', 'maxlength' => 50]],

            'premioID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Premio ID...']],

            'paquete_premiunID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Paquete Premiun ID...']],

            'publicidadID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Publicidad ID...']],
            
            'reclamosID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Reclamos ID...']],
        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
