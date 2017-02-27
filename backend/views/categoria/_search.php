<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\CategoriaSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="categoria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'categoriaID') ?>

    <?= $form->field($model, 'Nombre_Categ') ?>

    <?= $form->field($model, 'Descripcion_Cate') ?>

    <?= $form->field($model, 'Cantidad_SubCategoria') ?>

    <?= $form->field($model, 'status_cate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
