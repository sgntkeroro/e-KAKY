<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Permohonan */

$this->title = 'Update Permohonan: ' . ' ' . $model->permohonan_id;
$this->params['breadcrumbs'][] = ['label' => 'Permohonans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->permohonan_id, 'url' => ['view', 'id' => $model->permohonan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permohonan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,        
        'modelmohonbaru' => $modelmohonbaru,
        'modelbukulog' => $modelbukulog,
        'modelsperalatan' => $modelsperalatan,
    ]) ?>

</div>
