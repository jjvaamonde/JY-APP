<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\PagoUsuario $model
 */

$this->title = 'Create Pago Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Pago Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-usuario-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
