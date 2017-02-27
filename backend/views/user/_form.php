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

            'Login' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Login...', 'maxlength' => 50]],

            'Clave' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Clave...', 'maxlength' => 50]],

            'Nombre' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre...', 'maxlength' => 50]],

            'Direccion' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Direccion...','rows' => 6]],

            'Telefono' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Telefono...']],

            'Correo_Electronico' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Correo  Electronico...', 'maxlength' => 50]],

            'auth_key' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Auth Key...', 'maxlength' => 32]],

            'created_at' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Created At...']],

            'updated_at' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Updated At...']],

            'password_hash' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Password Hash...', 'maxlength' => 255]],

            'Avatar' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Avatar...', 'maxlength' => 50]],

            'Calificacion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Calificacion...']],

            'Puntos' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Puntos...']],

            'rol_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Rol ID...']],

            'Fecha_UltimaConexion' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'Cod_Referido' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Cod  Referido...', 'maxlength' => 50]],

            'status' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status...']],

            'paquete_PremiumID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Paquete  Premium ID...']],

            'premioID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Premio ID...']],

            'publicidadID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Publicidad ID...']],

            'reclamosID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Reclamos ID...']],

            'password_reset_token' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Password Reset Token...', 'maxlength' => 255]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
