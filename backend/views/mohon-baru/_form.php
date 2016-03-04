<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MohonBaru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mohon-baru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'permohonan_id')->textInput() ?>

    <?= $form->field($model, 'mohonBaru_program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mohonBaru_tahapPengajian')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
