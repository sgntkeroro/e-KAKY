<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use backend\models\PeralatanSearch;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PermohonanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Permohonan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permohonan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Permohonan Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [   
                'class' => 'kartik\grid\ExpandRowColumn',
                'value' => function ($model, $key, $index, $column) {
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function ($model, $key, $index, $column) {
                    $searchModel = new PeralatanSearch();
                    $searchModel->permohonan_id = $model->permohonan_id;
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                    return Yii::$app->controller->renderPartial('_peralatan', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                    ]);
                },
            ],
            'permohonan_id',
            //'user_id',
            'permohonan_tarikh',
            //'kelulusanJK_id',
            //'katPermohonan_id',
            'permohonan_tujuanBeli',
            // 'permohonan_jenisPeruntukan',
            'tahunSedia_id',
            'permohonan_lokasiCadangan',
            // 'statusPermohonan_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
