<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KatPermohonanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kat Permohonans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kat-permohonan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kat Permohonan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'katPermohonan_id',
            'katPermohonan_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
