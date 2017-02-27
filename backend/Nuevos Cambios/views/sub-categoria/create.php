<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SubCategoria */

$this->title = 'Create Sub Categoria';
$this->params['breadcrumbs'][] = ['label' => 'Sub Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-categoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
