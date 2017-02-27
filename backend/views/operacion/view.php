<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Operacion $model
 */

$this->title = $model->operacionID;
$this->params['breadcrumbs'][] = ['label' => 'Operacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operacion-view">
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
            'operacionID',
            'nombre_op',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->operacionID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
