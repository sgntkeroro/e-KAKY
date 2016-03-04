<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StatusMesyuaratSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Status Mesyuarats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-mesyuarat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Status Mesyuarat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'statusMesyuarat_id',
            'statusMesyuarat_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
