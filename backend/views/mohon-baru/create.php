<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MohonBaru */

$this->title = 'Create Mohon Baru';
$this->params['breadcrumbs'][] = ['label' => 'Mohon Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mohon-baru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
