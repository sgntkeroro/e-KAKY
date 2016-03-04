<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BukuLog */

$this->title = $model->bukuLog_id;
$this->params['breadcrumbs'][] = ['label' => 'Buku Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-log-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bukuLog_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bukuLog_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bukuLog_id',
            'permohonan_id',
            'bukuLog_nama',
            'bukuLog_deskripsi',
            'bukuLog_fail',
        ],
    ]) ?>

</div>
