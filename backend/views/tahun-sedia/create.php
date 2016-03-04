<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TahunSedia */

$this->title = 'Create Tahun Sedia';
$this->params['breadcrumbs'][] = ['label' => 'Tahun Sedias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-sedia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
