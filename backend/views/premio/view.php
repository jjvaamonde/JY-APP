<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Premio $model
 */

$this->title = $model->premioID;
$this->params['breadcrumbs'][] = ['label' => 'Premios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="premio-view">
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
            'premioID',
            'Nombre_Premio',
            'Descripcion_Premio',
            'Tipo_Premio',
            'Duracion',
            'Valor_Premio',
            'status_pre',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->premioID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
