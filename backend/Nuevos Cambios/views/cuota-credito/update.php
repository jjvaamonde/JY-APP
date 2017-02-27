<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CuotaCredito */

$this->title = 'Update Cuota Credito: ' . $model->cuota_CreditoID;
$this->params['breadcrumbs'][] = ['label' => 'Cuota Creditos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cuota_CreditoID, 'url' => ['view', 'id' => $model->cuota_CreditoID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cuota-credito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
