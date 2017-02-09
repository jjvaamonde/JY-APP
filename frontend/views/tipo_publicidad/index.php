<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tipo_publicidadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipopubicidads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipopubicidad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipopubicidad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->tipo_PubicidadID), ['view', 'id' => $model->tipo_PubicidadID]);
        },
    ]) ?>
</div>
