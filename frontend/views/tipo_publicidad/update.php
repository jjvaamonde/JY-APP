<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipopubicidad */

$this->title = 'Update Tipopubicidad: ' . $model->tipo_PubicidadID;
$this->params['breadcrumbs'][] = ['label' => 'Tipopubicidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tipo_PubicidadID, 'url' => ['view', 'id' => $model->tipo_PubicidadID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipopubicidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
