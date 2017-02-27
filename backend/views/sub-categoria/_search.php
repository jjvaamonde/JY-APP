<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\SubCategoriaSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="sub-categoria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sub_CategoriaID') ?>

    <?= $form->field($model, 'categoriaID') ?>

    <?= $form->field($model, 'Nombre_SubCat') ?>

    <?= $form->field($model, 'Descripcion_Subcat') ?>

    <?= $form->field($model, 'status_sub') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
