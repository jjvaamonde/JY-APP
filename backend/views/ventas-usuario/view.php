<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\VentasUsuario $model
 */

$this->title = $model->ventas_UsuarioID;
$this->params['breadcrumbs'][] = ['label' => 'Ventas Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ventas-usuario-view">
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
            'ventas_UsuarioID',
            'usuarioVenID',
            'usuarioComID',
            [
                'attribute' => 'Fecha_Venta',
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
            'Monto',
            'Tipo_Pago',
            'status_venta',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->ventas_UsuarioID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
