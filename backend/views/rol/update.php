<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Rol $model
 */

$this->title = 'Update Rol: ' . ' ' . $model->rol_ID;
$this->params['breadcrumbs'][] = ['label' => 'Rols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rol_ID, 'url' => ['view', 'id' => $model->rol_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tipoOperaciones' => $tipoOperaciones
    ]) ?>

</div>
