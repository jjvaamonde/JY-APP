<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Categoria $model
 */

$this->title = $model->categoriaID;
$this->params['breadcrumbs'][] = ['label' => 'Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-view">
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
            'categoriaID',
            'Nombre_Categ',
            'Descripcion_Cate',
            'Cantidad_SubCategoria',
            'status_cate',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->categoriaID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
