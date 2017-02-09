<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TipoAnuncio */

$this->title = 'Update Tipo Anuncio: ' . $model->tipo_AnuncioID;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Anuncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tipo_AnuncioID, 'url' => ['view', 'id' => $model->tipo_AnuncioID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-anuncio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
