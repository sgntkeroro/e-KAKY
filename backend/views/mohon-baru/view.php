<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MohonBaru */

$this->title = $model->mohonBaru_id;
$this->params['breadcrumbs'][] = ['label' => 'Mohon Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mohon-baru-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mohonBaru_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mohonBaru_id], [
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
            'mohonBaru_id',
            'permohonan_id',
            'mohonBaru_program',
            'mohonBaru_tahapPengajian',
        ],
    ]) ?>

</div>
