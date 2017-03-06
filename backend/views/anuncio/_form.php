<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\widgets\FileInput;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;
use yii\Url\helpers;
use yii\web\imagenesAnuncios;
/**
 * @var yii\web\View $this
 * @var backend\models\Anuncio $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="anuncio-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL,'options' => ['enctype'=>'multipart/form-data']]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

           'usuarioID' => ['type' => Form::INPUT_TEXT, 'options' => ['value' => Yii::$app->user->id,'disabled'=>'disabled']],

            'Titulo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Titulo...', 'maxlength' => 50]],

           'Clasificacion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Clasificacion...', 'maxlength' => 10]],

            'Descripcion' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Descripcion...','rows' => 6]],

           'DireccionVendedor' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Direccion Vendedor...', 'maxlength' => 255]],

            'Fecha_Publicacion' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'Fecha_Caducidad' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

              'categoriaID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Selecione una Categoria...']],

              'sub_categoriaID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Selecione una Sub Categoria...']],

            //  'imagen' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => FileInput::classname(),'pluginOptions' => ['previewFileType' => 'any']],

             'Cantidad_Articulo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Cantidad  Articulo...']],

              'Calificacion_Vendedor' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Calificacion  Vendedor...']],


        ]


    ]);
            echo '<label class="control-label">Imagen</label>';
            echo $form->field($model, 'imagen')->widget(FileInput::classname(),
                ['pluginOptions' => [
               'showUpload' => false,
                //  'uploadUrl' => Url::to(['/backend/web/uploads/']),
                  'browseClass' => 'btn btn-success',
                  'uploadClass' => 'btn btn-info',
                  'removeClass' => 'btn btn-danger',
                  'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
                ], 'language' => 'es','options' => ['accept' =>  'imagen/*'],
              ]);


    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
