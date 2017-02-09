<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Anuncio */

$this->title = $model->anuncioID;
$this->params['breadcrumbs'][] = ['label' => 'Anuncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anuncio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->anuncioID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->anuncioID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'anuncioID',
            'Vendedor',
            'Sub_Categoria',
            'Titulo',
            'Clasificacion',
            'Descripcion:ntext',
            'DireccionVendedor',
            'Cantidad_Articulo',
            'Calificacion_Vendedor',
            'Fecha_Publicacion',
            'Fecha_Caducidad',
            'CantImagen',
            'status_anuncio',
        ],
    ]) ?>

</div>
