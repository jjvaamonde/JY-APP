<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VentasUsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ventas Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ventas-usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ventas Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Cod_Vendedor',
            'Fecha_Venta',
            'Monto',
            'Cod_Comprador',
            'Tipo_Pago',
            // 'ventas_UsuarioID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
