<?php
// 0416-6543587 numero Johana
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;
use kartik\widgets\FileInput;
use kartik\widgets\TypeaheadBasic;
use kartik\widgets\TouchSpin;
use yii\helpers\Url;
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

            'Vendedor' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Vendedor...']],

            'DireccionVendedor' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Direccion Vendedor...', 'maxlength' => 255]],

            'Clasificacion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Clasificacion...', 'maxlength' => 10]],

            'Titulo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Titulo...', 'maxlength' => 50]],

            'Sub_categoria' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Seleccione Sub Categoria...']],

            'Descripcion' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Ingrese  Descripcion...','rows' => 6]],

            'Fecha_Publicacion' =>['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]
          ],

            'Fecha_Caducidad' => ['type' => Form::INPUT_TEXT,'options'=>['placeholder' => 'Ingrese  los dias de vigencia' ]],

            'Imagen[]' => ['type' =>Form::INPUT_WIDGET, 'widgetClass' =>  FileInput::classname()],

            'Cantidad_Articulo' => ['type' =>  Form::INPUT_WIDGET, 'widgetClass' => TouchSpin::classname(),'pluginOptions' => [
                'placeholder' => 'Ingrese la Cantidad de Articulos disponibles...',
                'buttonup_class' => 'btn btn-primary',
                'buttondown_class' => 'btn btn-info',
                'buttonup_txt' => '<i class="glyphicon glyphicon-plus-sign"></i>',
                'buttondown_txt' => '<i class="glyphicon glyphicon-minus-sign"></i>']]
              ],

    ]); 



    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
