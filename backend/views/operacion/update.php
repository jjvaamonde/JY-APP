<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Operacion $model
 */

$this->title = 'Update Operacion: ' . ' ' . $model->operacion_ID;
$this->params['breadcrumbs'][] = ['label' => 'Operacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->operacion_ID, 'url' => ['view', 'id' => $model->operacion_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
