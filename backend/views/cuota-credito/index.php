<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CuotaCreditoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cuota Creditos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuota-credito-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cuota Credito', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Cod_Pago',
            'Monto_Cuota',
            'Fecha_Cuota',
            'cuota_CreditoID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
