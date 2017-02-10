<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SubCategoria */

$this->title = 'Update Sub Categoria: ' . $model->sub_CategoriaID;
$this->params['breadcrumbs'][] = ['label' => 'Sub Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sub_CategoriaID, 'url' => ['view', 'id' => $model->sub_CategoriaID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sub-categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
