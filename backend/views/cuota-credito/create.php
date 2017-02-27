<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\CuotaCredito $model
 */

$this->title = 'Create Cuota Credito';
$this->params['breadcrumbs'][] = ['label' => 'Cuota Creditos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuota-credito-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
