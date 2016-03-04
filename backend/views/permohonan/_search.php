<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PermohonanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="permohonan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'permohonan_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'permohonan_tarikh') ?>

    <?= $form->field($model, 'kelulusanJK_id') ?>

    <?= $form->field($model, 'katPermohonan_id') ?>

    <?php // echo $form->field($model, 'permohonan_tujuanBeli') ?>

    <?php // echo $form->field($model, 'permohonan_jenisPeruntukan') ?>

    <?php // echo $form->field($model, 'tahunSedia_id') ?>

    <?php // echo $form->field($model, 'permohonan_lokasiCadangan') ?>

    <?php // echo $form->field($model, 'statusPermohonan_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
