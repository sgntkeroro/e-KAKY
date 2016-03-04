<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StatusPermohonanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Status Permohonans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-permohonan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Status Permohonan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'statusPermohonan_id',
            'statusPermohonan_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
