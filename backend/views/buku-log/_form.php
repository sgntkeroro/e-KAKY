<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BukuLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-log-form">

    <?php $form = ActiveForm::begin(['options' => [ 'enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'permohonan_id')->textInput() ?>

    <?= $form->field($model, 'bukuLog_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bukuLog_deskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bukuLog_fail')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
