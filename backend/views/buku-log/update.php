<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BukuLog */

$this->title = 'Update Buku Log: ' . ' ' . $model->bukuLog_id;
$this->params['breadcrumbs'][] = ['label' => 'Buku Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bukuLog_id, 'url' => ['view', 'id' => $model->bukuLog_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="buku-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
