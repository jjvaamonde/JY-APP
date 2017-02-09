<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tipopubicidad */

$this->title = $model->tipo_PubicidadID;
$this->params['breadcrumbs'][] = ['label' => 'Tipopubicidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipopubicidad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tipo_PubicidadID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tipo_PubicidadID], [
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
            'Nombre',
            'Descripcion',
            'Precio_TPubli',
            'Duracion_paraMostrar',
            'Caducidad',
            'tipo_PubicidadID',
        ],
    ]) ?>

</div>
