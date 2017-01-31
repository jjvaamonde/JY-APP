<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Anuncio */

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
            'arr_Imagen',
            'Categoria',
            'Clasificacion',
            'Descripcion:ntext',
            'DireccionVendedor',
            'Titulo',
            'Nombre_Vendedor',
            'Cantidad_Articulo',
            'Calificacion_Vendedor',
            'Fecha_Publicacion',
            'Fecha_Caducidad',
            'anuncioID',
        ],
    ]) ?>

</div>
