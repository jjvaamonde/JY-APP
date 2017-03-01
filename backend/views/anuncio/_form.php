<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;
use kartik\widgets\FileInput;
/**
 * @var yii\web\View $this
 * @var backend\models\Anuncio $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="anuncio-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

           'usuarioID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Usuario ID...']],
            'Titulo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Titulo...', 'maxlength' => 50]],

            'categoriaID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Categoria ID...']],

            'sub_categoriaID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Seleccione Sub Categoria ']],

            'Titulo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Titulo...', 'maxlength' => 50]],

            'Clasificacion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Clasificacion...', 'maxlength' => 10]],

            'Descripcion' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Descripcion...','rows' => 6]],

           'DireccionVendedor' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Direccion Vendedor...', 'maxlength' => 255]],

          'Fecha_Publicacion' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'Fecha_Caducidad' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'Cantidad_Articulo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Cantidad  Articulo...']],

            'Calificacion_Vendedor' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Calificacion  Vendedor...']],

            'imagen' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => FileInput::classname(),'pluginOptions' => ['previewFileType' => 'any']],
          //  'status_anuncio' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status Anuncio...']],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
