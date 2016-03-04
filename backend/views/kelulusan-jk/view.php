<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KelulusanJk */

$this->title = $model->kelulusanJK_id;
$this->params['breadcrumbs'][] = ['label' => 'Kelulusan Jks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelulusan-jk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kelulusanJK_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kelulusanJK_id], [
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
            'kelulusanJK_id',
            'kelulusanJK_nama',
        ],
    ]) ?>

</div>
