<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TipoAnuncio */

$this->title = $model->tipo_AnuncioID;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Anuncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-anuncio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tipo_AnuncioID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tipo_AnuncioID], [
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
            'Nombre_TipoAnuncio',
            'Descripcion_TipoAnun',
            'Cantidad_Imagenes',
            'Ancho_TipoAnun',
            'Alto_TipoAnun',
            'Posicion_video',
            'Posicion_Info',
            'Posiscion_Imagen',
            'Posicion_Descripcion',
            'Posicion_Titulo',
            'tipo_AnuncioID',
        ],
    ]) ?>

</div>
