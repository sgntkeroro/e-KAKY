<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fakulti */

$this->title = 'Update Fakulti: ' . ' ' . $model->fakulti_id;
$this->params['breadcrumbs'][] = ['label' => 'Fakultis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fakulti_id, 'url' => ['view', 'id' => $model->fakulti_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fakulti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
