<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubCategoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-categoria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sub Categoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->sub_CategoriaID), ['view', 'id' => $model->sub_CategoriaID]);
        },
    ]) ?>
<?php Pjax::end(); ?></div>
