<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Peralatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peralatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'permohonan_id')->textInput() ?>

    <?= $form->field($model, 'peralatan_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peralatan_kuantiti')->textInput() ?>

    <?= $form->field($model, 'peralatan_hargaSeunit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
