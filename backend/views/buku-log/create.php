<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BukuLog */

$this->title = 'Create Buku Log';
$this->params['breadcrumbs'][] = ['label' => 'Buku Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
