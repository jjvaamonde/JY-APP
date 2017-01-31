<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubCategoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-categoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre_SubCat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion_Subcat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cod_Categoria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_CategoriaID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
