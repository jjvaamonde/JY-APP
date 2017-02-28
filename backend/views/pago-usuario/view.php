<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PagoUsuario */

$this->title = $model->pago_UsuarioID;
$this->params['breadcrumbs'][] = ['label' => 'Pago Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pago_UsuarioID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pago_UsuarioID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Tipo_Pago',
            'Monto_Total',
            'Monto_Cancelado',
            'Cod_Usuario',
            'Nombre_ServicioComprado',
            'Fecha_Pago',
            'arr_Cuotas',
            'Periodo_Cobro',
            'pago_UsuarioID',
        ],
    ]) ?>

</div>
