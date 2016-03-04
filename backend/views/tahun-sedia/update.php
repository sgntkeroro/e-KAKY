<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TahunSedia */

$this->title = 'Update Tahun Sedia: ' . ' ' . $model->tahunSedia_id;
$this->params['breadcrumbs'][] = ['label' => 'Tahun Sedias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tahunSedia_id, 'url' => ['view', 'id' => $model->tahunSedia_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tahun-sedia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
