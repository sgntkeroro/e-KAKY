<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BukuLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buku Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Buku Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bukuLog_id',
            'permohonan_id',
            'bukuLog_nama',
            'bukuLog_deskripsi',
            'bukuLog_fail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
