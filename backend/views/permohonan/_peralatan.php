<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeralatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="peralatan-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'peralatan_id',
            'permohonan_id',
            'peralatan_nama',
            'peralatan_kuantiti',
            'peralatan_hargaSeunit',
        ],
    ]); ?>

</div>
