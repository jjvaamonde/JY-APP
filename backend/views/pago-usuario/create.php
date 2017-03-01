<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PagoUsuario */

$this->title = 'Create Pago Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Pago Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
