<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PeralatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peralatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'peralatan_id') ?>

    <?= $form->field($model, 'permohonan_id') ?>

    <?= $form->field($model, 'peralatan_nama') ?>

    <?= $form->field($model, 'peralatan_kuantiti') ?>

    <?= $form->field($model, 'peralatan_hargaSeunit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
