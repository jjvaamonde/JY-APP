<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Usuario $model
 */

$this->title = 'Update Usuario: ' . ' ' . $model->usuarioID;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usuarioID, 'url' => ['view', 'id' => $model->usuarioID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
