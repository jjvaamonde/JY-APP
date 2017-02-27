<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\AuncioSearch $searchModel
 */

$this->title = 'Anuncios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anuncio-index">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Crear nuevo Anuncio', ['create'], ['class' => 'btn btn-success'])  ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->anuncioID), ['view', 'id' => $model->anuncioID]);
        },
    ]) ?>

</div>
