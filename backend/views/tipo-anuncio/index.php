<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TipoAnuncioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Anuncios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-anuncio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipo Anuncio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nombre_TipoAnuncio',
            'Descripcion_TipoAnun',
            'Cantidad_Imagenes',
            'Ancho_TipoAnun',
            'Alto_TipoAnun',
            // 'Posicion_video',
            // 'Posicion_Info',
            // 'Posiscion_Imagen',
            // 'Posicion_Descripcion',
            // 'Posicion_Titulo',
            // 'tipo_AnuncioID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
