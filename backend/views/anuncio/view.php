<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Anuncio $model
 */

$this->title = $model->anuncioID;
$this->params['breadcrumbs'][] = ['label' => 'Anuncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anuncio-view">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>


    <?= DetailView::widget([
        'model' => $model,
        'condensed' => false,
        'hover' => true,
        'mode' => Yii::$app->request->get('edit') == 't' ? DetailView::MODE_EDIT : DetailView::MODE_VIEW,
        'panel' => [
            'heading' => $this->title,
            'type' => DetailView::TYPE_INFO,
        ],
        'attributes' => [
            'anuncioID',
            'Vendedor',
            'Sub_categoria',
            'Titulo',
            'Clasificacion',
            'Descripcion:ntext',
            'DireccionVendedor',
            'Cantidad_Articulo',
            'Calificacion_Vendedor',
            [
                'attribute' => 'Fecha_Publicacion',
                'format' => [
                    'date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date']))
                        ? Yii::$app->modules['datecontrol']['displaySettings']['date']
                        : 'd-m-Y'
                ],
                'type' => DetailView::INPUT_WIDGET,
                'widgetOptions' => [
                    'class' => DateControl::classname(),
                    'type' => DateControl::FORMAT_DATE
                ]
            ],
            'Fecha_Caducidad',
            'Imagen:ntext',
            'status_anuncio',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->anuncioID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
