<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Permohonan */

$this->title = $model->permohonan_id;
$this->params['breadcrumbs'][] = ['label' => 'Permohonans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permohonan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->permohonan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->permohonan_id], [
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
            'permohonan_id',
            'user_id',
            'permohonan_tarikh',
            'kelulusanJK_id',
            'katPermohonan_id',
            'permohonan_tujuanBeli',
            'permohonan_jenisPeruntukan',
            'tahunSedia_id',
            'permohonan_lokasiCadangan',
            'statusPermohonan_id',
        ],
    ]) ?>


    'attributes'=>[
        ['attribute'=>'permohonan_lokasiCadangan', 'label'=>'Lokasi Cadangan'],
        'permohonan_tujuanBeli',
        ['attribute'=>'permohonan_tarikh', 'type'=>DetailView::INPUT_DATE],
    ]

</div>



DetailView::widget([
    $attributes = [
        'model'=>$model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>DetailView::MODE_VIEW,
        'panel'=>[
            'heading'=>'Butiran Permohonan : ' . $model->permohonan_id,
            'type'=>DetailView::TYPE_INFO,
        ],
        'columns'=>[
            ['attribute'=>'permohonan_lokasiCadangan', 'label'=>'Lokasi Cadangan'],
            'permohonan_tujuanBeli',
            ['attribute'=>'permohonan_tarikh', 'label'=>'Tarikh Permohonan', 'type'=>DetailView::INPUT_DATE],
            'valueColOptions'=>['style'=>'width:30%']
        ],

    ]
]);

?>


<?= 
    // DetailView::widget([
    // 'model'=>$model,
    // 'condensed'=>true,
    // 'hover'=>true,
    // 'mode'=>DetailView::MODE_VIEW,
    //         'panel'=>[
    //         'heading'=>'Butiran Permohonan : ' . $model->permohonan_id,
    //         'type'=>DetailView::TYPE_INFO,
    // ],
    // 'attributes'=>[
    //     [
    //         'columns' =>[
    //             [
    //                 'attribute'=>'permohonan_tujuanBeli',
    //                 'label'=>'',
    //                 'valueColOptions'=>['style'=>'width:30%']
    //             ],
    //             [
    //                 'attribute'=>'permohonan_tujuanBeli',
    //                 'label'=>'',
    //                 'valueColOptions'=>['style'=>'width:30%']                               
    //             ],
    //             [
    //                 'attribute'=>'permohonan_tarikh',
    //                 'label'=>'',
    //                 'type'=>DetailView::INPUT_DATE,
    //                 'valueColOptions'=>['style'=>'width:30%']
    //             ],
    //         ],
    //     ]
    // ]
    // ]);
?>