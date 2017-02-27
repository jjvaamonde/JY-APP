<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\PaquetePremium $model
 */

$this->title = $model->paquete_PremiumID;
$this->params['breadcrumbs'][] = ['label' => 'Paquete Premia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paquete-premium-view">
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
            'paquete_PremiumID',
            'Nombre_PP',
            'Descripcion_PP',
            'Precio_PP',
            'Duracion_PP',
            'Tipo_PP',
            'estado',
            'statusPP',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->paquete_PremiumID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
