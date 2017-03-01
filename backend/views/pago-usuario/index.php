<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PagoUsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pago Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pago Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Tipo_Pago',
            'Monto_Total',
            'Monto_Cancelado',
            'Cod_Usuario',
            'Nombre_ServicioComprado',
            // 'Fecha_Pago',
            // 'arr_Cuotas',
            // 'Periodo_Cobro',
            // 'pago_UsuarioID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
