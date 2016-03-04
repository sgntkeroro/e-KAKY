<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StatusMesyuarat */

$this->title = 'Update Status Mesyuarat: ' . ' ' . $model->statusMesyuarat_id;
$this->params['breadcrumbs'][] = ['label' => 'Status Mesyuarats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->statusMesyuarat_id, 'url' => ['view', 'id' => $model->statusMesyuarat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-mesyuarat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
