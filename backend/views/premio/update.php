<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Premio */

$this->title = 'Update Premio: ' . $model->premioID;
$this->params['breadcrumbs'][] = ['label' => 'Premios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->premioID, 'url' => ['view', 'id' => $model->premioID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="premio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
