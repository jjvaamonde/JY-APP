<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\SubCategoriaSearch $searchModel
 */

$this->title = 'Sub Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-categoria-index">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php  $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php /* echo Html::a('Create Sub Categoria', ['create'], ['class' => 'btn btn-success'])*/  ?>
    </p>

    <?php Pjax::begin(); echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sub_CategoriaID',
            'Cod_Categoria',
            'Nombre_SubCat',
            'Descripcion_Subcat',
            'status_sub',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',
                            Yii::$app->urlManager->createUrl(['sub-categoria/view', 'id' => $model->sub_CategoriaID, 'edit' => 't']),
                            ['title' => Yii::t('yii', 'Edit'),]
                        );
                    }
                ],
            ],
        ],
        'responsive' => true,
        'hover' => true,
        'condensed' => true,
        'floatHeader' => true,

        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i> '.Html::encode($this->title).' </h3>',
            'type' => 'info',
            'before' => Html::a('<i class="glyphicon glyphicon-plus"></i> Nueva', ['create'], ['class' => 'btn btn-success']),
            'after' => Html::a('<i class="glyphicon glyphicon-repeat"></i> Reiniciar Lista', ['index'], ['class' => 'btn btn-info']),
            'showFooter' => false
        ],
    ]); Pjax::end(); ?>

</div>
