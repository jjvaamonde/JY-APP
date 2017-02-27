<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Operacion $model
 */

$this->title = 'Update Operacion: ' . ' ' . $model->operacionID;
$this->params['breadcrumbs'][] = ['label' => 'Operacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->operacionID, 'url' => ['view', 'id' => $model->operacionID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
