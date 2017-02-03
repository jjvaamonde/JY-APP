<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CuotaCredito */

$this->title = 'Create Cuota Credito';
$this->params['breadcrumbs'][] = ['label' => 'Cuota Creditos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuota-credito-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
