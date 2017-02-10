<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PremioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Premios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="premio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Premio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nombre_Premio',
            'Descripcion_Premio',
            'Tipo_Premio',
            'Duracion',
            'Valor_Premio',
            // 'premioID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
