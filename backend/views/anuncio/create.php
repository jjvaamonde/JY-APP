<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Anuncio $model
 */

$this->title = 'Crear Anuncio';
$this->params['breadcrumbs'][] = ['label' => 'Anuncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anuncio-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
