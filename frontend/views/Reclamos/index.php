<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReclamosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reclamos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reclamos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reclamos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->reclamosID), ['view', 'id' => $model->reclamosID]);
        },
    ]) ?>
</div>
