<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;
use kartik\widgets\FileInput;
use kartik\widgets\StarRating;
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

            'Vendedor' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => ' Vendedor...']],

            'Sub_Categoria' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Seleccione una Sub  Categoria...']],

            'Titulo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Titulo...', 'maxlength' => 50]],

            'Clasificacion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Ingrese Clasificacion...', 'maxlength' => 10]],

            'Descripcion' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Descripcion...','rows' => 6]],

            'DireccionVendedor' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Direccion Vendedor...', 'maxlength' => 255]],

            'Fecha_Publicacion' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'Fecha_Caducidad' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Fecha  Caducidad...', 'maxlength' => 20]],

            'Cantidad_Articulo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Cantidad  Articulo...']],

            'Imagen' => ['type' =>Form::INPUT_WIDGET, 'widgetClass' => FileInput::classname(),
                  'pluginOptions' => ['previewFileType' => 'any']],

            'Calificacion_Vendedor' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => StarRating::classname(),
            'pluginOptions' => [
                'theme' => 'krajee-uni',
                'filledStar' => '&#x2605;',
                'emptyStar' => '&#x2606;'] ],
              ]
]);



    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
