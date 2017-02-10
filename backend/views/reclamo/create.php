<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Reclamos $model
 */

$this->title = 'Create Reclamos';
$this->params['breadcrumbs'][] = ['label' => 'Reclamos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reclamos-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
