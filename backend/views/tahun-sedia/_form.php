<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TahunSedia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tahun-sedia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahunSedia_tahun')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
