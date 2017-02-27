<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Rol $model
 */

$this->title = $model->rol_ID;
$this->params['breadcrumbs'][] = ['label' => 'Rols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rol-view">
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
            'rol_ID',
            'nombre_rol',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->rol_ID],
        ],
        'enableEditMode' => true,
    ]) ?>
    
    <h2>Operaciones Permitidas</h2>
 
        <?php
         
        foreach ($model->operacionesPermitidasList as $operacionPermitida) {
            echo $operacionPermitida['nombre'] . "
        ";
        }
         
        ?>

</div>
