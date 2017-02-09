<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reclamos */

$this->title = 'Update Reclamos: ' . $model->reclamosID;
$this->params['breadcrumbs'][] = ['label' => 'Reclamos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reclamosID, 'url' => ['view', 'id' => $model->reclamosID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reclamos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
