<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\VentasUsuario $model
 */

$this->title = 'Create Ventas Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Ventas Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ventas-usuario-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
