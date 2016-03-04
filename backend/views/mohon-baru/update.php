<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MohonBaru */

$this->title = 'Update Mohon Baru: ' . ' ' . $model->mohonBaru_id;
$this->params['breadcrumbs'][] = ['label' => 'Mohon Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mohonBaru_id, 'url' => ['view', 'id' => $model->mohonBaru_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mohon-baru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
