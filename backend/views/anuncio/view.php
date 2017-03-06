<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;
use kartik\widgets\FileInput;
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
            'usuarioID',
            'sub_categoriaID',
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
            [
                'attribute' => 'Fecha_Caducidad',
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
            'categoriaID',
            [
              'attribute' =>  'imagen',
              'type' => DetailView::INPUT_WIDGET,
              'widgetOptions' => [
                  'class' =>FileInput::classname(),
                'pluginOptions' => [
               'showUpload' => false,
               'showRemove' => false,
               //'showBrowser' => false,
                'browseClass' => 'btn btn-success',
                'uploadClass' => 'btn btn-info',
                    'removeClass' => 'btn btn-danger',
                    'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
                  ], 'language' => 'es'
             ],
           ],
            'status_anuncio',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->anuncioID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
