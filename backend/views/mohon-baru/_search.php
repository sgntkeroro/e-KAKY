<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MohonBaruSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mohon-baru-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mohonBaru_id') ?>

    <?= $form->field($model, 'permohonan_id') ?>

    <?= $form->field($model, 'mohonBaru_program') ?>

    <?= $form->field($model, 'mohonBaru_tahapPengajian') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
