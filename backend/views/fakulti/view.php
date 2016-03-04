<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Fakulti */

$this->title = $model->fakulti_id;
$this->params['breadcrumbs'][] = ['label' => 'Fakultis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakulti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fakulti_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fakulti_id], [
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
            'fakulti_id',
            'fakulti_nama',
        ],
    ]) ?>

</div>
