<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\PaquetePremium $model
 */

$this->title = 'Update Paquete Premium: ' . ' ' . $model->paquete_PremiumID;
$this->params['breadcrumbs'][] = ['label' => 'Paquete Premia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->paquete_PremiumID, 'url' => ['view', 'id' => $model->paquete_PremiumID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paquete-premium-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
