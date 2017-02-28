<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;
use kartik\widgets\FileInput;

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

            'Nombre' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre...', 'maxlength' => 50]],

            'Direccion' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Direccion...','rows' => 6]],

            'Telefono' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Telefono...']],

            //'Avatar' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Avatar...', 'maxlength' => 50]],

            'paquete_premiunID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Paquete Premiun ID...']],

            'publicidadID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Publicidad ID...']],
            
        ]

    ]);

        //echo '<label class="control-label">Subir Avatar</label>';
        echo $form->field($model,'Avatar')->widget(FileInput::classname(),
            ['options'=>['accept'=>'image/*'],
            'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png']]
              ]);


    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
