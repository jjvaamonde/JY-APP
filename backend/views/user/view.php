<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 */

$this->title = $model->usuarioID;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
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
            'usuarioID',
            'Rif_CI',
            'username',
            'premioID',
            'paquete_premiunID',
            'publicidadID',
            'Nombre',
            'Direccion:ntext',
            'Telefono',
            'email:email',
            'auth_key',
            'created_at',
            'updated_at',
            'password_hash',
            'password_reset_token',
            'Avatar',
            'Calificacion',
            'Puntos',
            'rol_ID',
            [
                'attribute' => 'Fecha_UltimaConexion',
                'format' => [
                    'date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date']))
                        ? Yii::$app->modules['datecontrol']['displaySettings']['date']
                        : 'd-m-Y'
                ],
                'type' => DetailView::INPUT_WIDGET,
                'widgetOptions' => [
                    'class' => DateControl::classname(),
                    'type' => DateControl::FORMAT_DATE
                ]
            ],
            'Cod_Referido',
            'reclamosID',
            'status',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->usuarioID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>
