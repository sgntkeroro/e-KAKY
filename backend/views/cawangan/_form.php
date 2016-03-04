<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Negeri;

/* @var $this yii\web\View */
/* @var $model backend\models\Cawangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cawangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'negeri_id')->dropDownList(
    	ArrayHelper::map(Negeri::find()->all(),'negeri_id','negeri_nama'),
    	['prompt'=>'Sila Pilih Negeri']
    ) ?>

    <?= $form->field($model, 'cawangan_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cawangan_poskod')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
