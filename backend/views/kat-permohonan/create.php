<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\KatPermohonan */

$this->title = 'Create Kat Permohonan';
$this->params['breadcrumbs'][] = ['label' => 'Kat Permohonans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kat-permohonan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
