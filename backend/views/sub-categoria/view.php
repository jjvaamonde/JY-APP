<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\SubCategoria $model
 */

$this->title = $model->sub_CategoriaID;
$this->params['breadcrumbs'][] = ['label' => 'Sub Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-categoria-view">
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
            'sub_CategoriaID',
            'categoriaID',
            'Nombre_SubCat',
            'Descripcion_Subcat',
            'status_sub',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->sub_CategoriaID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
