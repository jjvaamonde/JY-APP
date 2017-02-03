<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PublicidadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publicidads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicidad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Publicidad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Titulo',
            'Cod_Usuario',
            'Fecha_Inicial',
            'Fecha_Final',
            'Imagen_Publicitaria',
            // 'Duracion',
            // 'Enlace',
            // 'publicidadID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
