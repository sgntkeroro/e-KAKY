<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cawangan */

$this->title = 'Update Cawangan: ' . ' ' . $model->cawangan_id;
$this->params['breadcrumbs'][] = ['label' => 'Cawangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cawangan_id, 'url' => ['view', 'id' => $model->cawangan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cawangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
