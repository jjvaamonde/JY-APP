<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Operacion $model
 */

$this->title = 'Create Operacion';
$this->params['breadcrumbs'][] = ['label' => 'Operacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operacion-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
