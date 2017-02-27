<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\PaquetePremium $model
 */

$this->title = 'Create Paquete Premium';
$this->params['breadcrumbs'][] = ['label' => 'Paquete Premia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paquete-premium-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
