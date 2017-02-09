<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TipoAnuncio */

$this->title = 'Create Tipo Anuncio';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Anuncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-anuncio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
