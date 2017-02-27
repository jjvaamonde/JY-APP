<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Rol $model
 */

$this->title = 'Create Rol';
$this->params['breadcrumbs'][] = ['label' => 'Rols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rol-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
        'tipoOperaciones' => $tipoOperaciones
    ]) ?>

</div>
