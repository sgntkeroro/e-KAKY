<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StatusMesyuarat */

$this->title = $model->statusMesyuarat_id;
$this->params['breadcrumbs'][] = ['label' => 'Status Mesyuarats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-mesyuarat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->statusMesyuarat_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->statusMesyuarat_id], [
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
            'statusMesyuarat_id',
            'statusMesyuarat_nama',
        ],
    ]) ?>

</div>
