<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\PagoUsuario $model
 */

$this->title = $model->pago_UsuarioID;
$this->params['breadcrumbs'][] = ['label' => 'Pago Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-usuario-view">
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
            'pago_UsuarioID',
            'UsuarioID',
            'Cuotas',
            'Tipo_Pago',
            'Monto_Total',
            'Monto_Cancelado',
            'Nombre_ServicioComprado',
            [
                'attribute' => 'Fecha_Pago',
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
            'Periodo_Cobro',
            'status_p_u',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->pago_UsuarioID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
