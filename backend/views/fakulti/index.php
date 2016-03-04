<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FakultiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fakultis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakulti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fakulti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fakulti_id',
            'fakulti_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
