<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MohonBaruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mohon Barus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mohon-baru-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mohon Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mohonBaru_id',
            'permohonan_id',
            'mohonBaru_program',
            'mohonBaru_tahapPengajian',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
