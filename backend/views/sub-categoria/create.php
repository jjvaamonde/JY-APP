<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\SubCategoria $model
 */

$this->title = 'Create Sub Categoria';
$this->params['breadcrumbs'][] = ['label' => 'Sub Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-categoria-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
