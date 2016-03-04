<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PermohonanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Permohonans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permohonan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Permohonan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'permohonan_id',
            'user_id',
            'permohonan_tarikh',
            'kelulusanJK_id',
            'katPermohonan_id',
            // 'permohonan_tujuanBeli',
            // 'permohonan_jenisPeruntukan',
            // 'tahunSedia_id',
            // 'permohonan_lokasiCadangan',
            // 'statusPermohonan_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
