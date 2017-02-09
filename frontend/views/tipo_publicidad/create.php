<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipopubicidad */

$this->title = 'Create Tipopubicidad';
$this->params['breadcrumbs'][] = ['label' => 'Tipopubicidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipopubicidad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
