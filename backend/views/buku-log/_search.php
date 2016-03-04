<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BukuLogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bukuLog_id') ?>

    <?= $form->field($model, 'permohonan_id') ?>

    <?= $form->field($model, 'bukuLog_nama') ?>

    <?= $form->field($model, 'bukuLog_deskripsi') ?>

    <?= $form->field($model, 'bukuLog_fail') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
