<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StatusPermohonan */

$this->title = 'Update Status Permohonan: ' . ' ' . $model->statusPermohonan_id;
$this->params['breadcrumbs'][] = ['label' => 'Status Permohonans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->statusPermohonan_id, 'url' => ['view', 'id' => $model->statusPermohonan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-permohonan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
