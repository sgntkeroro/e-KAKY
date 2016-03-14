<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\TahunSedia;
use backend\models\KelulusanJk;
use backend\models\KatPermohonan;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model backend\models\Permohonan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="permohonan-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'dynamic-form']]); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value'=>Yii::$app->user->identity->id, 'readonly' => true])?>

    <?= $form->field($model, 'permohonan_tarikh')->hiddenInput(['value'=>date('Y-m-d h:m:s'), 'readonly' => true])?>

    <?= $form->field($model, 'kelulusanJK_id')->dropDownList(
        ArrayHelper::map(KelulusanJk::find()->all(),'kelulusanJK_id','kelulusanJK_nama'),
        ['prompt'=>'Sila Pilih Kelulusan Jawatankuasa Teknikal Berkaitan']
    ) ?>

    <div>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#pilih_dulu").change(function(){

                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="1"){
                            $(".box").not(".1").hide();
                            $(".1").show();
                        }

                        else if($(this).attr("value")=="2"){
                            $(".box").not(".2").hide();
                            $(".2").show();
                        }

                        else if($(this).attr("value")=="3"){
                            $(".box").not(".3").hide();
                            $(".3").show();
                        }

                        else{
                            $(".box").hide();
                        }
                    });
                }).change();
            });
        </script>
    </div>

    <div>
        <label> Kategori Permohonan Peralatan
        </label><br>
            <select id="pilih_dulu">
            <option value="1">Tambahan kepada yang sedia ada</option>
            <option value="2">Gantian bagi yang dilupuskan</option>
            <option value="3">Permohonan baru</option>
        </select>
    </div><br>

    <div class="1 box">
        <div class="panel panel-default">          
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-book" aria-hidden="true"> Buku Log</span></h3>
            </div>
            
            <div class="panel-body">
                <br>*Sila lampirkan buku log kegunaan peralatan yang sedia ada<br><br>
                <?= $form->field($model, 'katPermohonan_id')->hiddenInput(['value'=>1, 'readonly' => true])?>
                <?= $form->field($modelbukulog, 'bukuLog_nama')->textInput(['maxlength' => true]) ?>
                <?= $form->field($modelbukulog, 'bukuLog_deskripsi')->textInput(['maxlength' => true]) ?>
                <?= $form->field($modelbukulog, 'bukuLog_fail')->fileInput() ?>
            </div>
        </div>
    </div>

    <div class="2 box">
        <div class="panel panel-default">          
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-book" aria-hidden="true"> 2</span></h3>
            </div>
                
            <div class="panel-body">
                <?= $form->field($model, 'katPermohonan_id')->hiddenInput(['value'=>2, 'readonly' => true])?>
            </div>
        </div>
    </div>

    <div class="3 box">
        <div class="panel panel-default">          
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-list" aria-hidden="true"> Butiran Permohonan Baru </span></h3>
            </div>
                
            <div class="panel-body">
                <?= $form->field($model, 'katPermohonan_id')->hiddenInput(['value'=>3, 'readonly' => true])?>
                <?= $form->field($modelmohonbaru, 'mohonBaru_program')->textInput(['maxlength' => true]) ?>
                <?= $form->field($modelmohonbaru, 'mohonBaru_tahapPengajian')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>    

    <?= $form->field($model, 'permohonan_tujuanBeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permohonan_jenisPeruntukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahunSedia_id')->dropDownList(
        ArrayHelper::map(TahunSedia::find()->all(),'tahunSedia_id','tahunSedia_tahun'),
        ['prompt'=>'Sila Pilih Tahun']
    ) ?>

    <?= $form->field($model, 'permohonan_lokasiCadangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statusPermohonan_id')->hiddenInput(['value'=>'1', 'readonly' => true])?>

    <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-list"></i> Peralatan </h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 100, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsperalatan[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'peralatan_nama',
                    'peralatan_kuantiti',
                    'peralatan_hargaSeunit',
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsperalatan as $i => $modelperalatan): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Butiran Peralatan</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelperalatan->isNewRecord) {
                                echo Html::activeHiddenInput($modelperalatan, "[{$i}]id");
                            }
                        ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($modelperalatan, "[{$i}]peralatan_nama")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($modelperalatan, "[{$i}]peralatan_kuantiti")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($modelperalatan, "[{$i}]peralatan_hargaSeunit")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>
</div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>