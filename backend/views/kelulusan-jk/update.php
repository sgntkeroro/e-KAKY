<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KelulusanJk */

$this->title = 'Update Kelulusan Jk: ' . ' ' . $model->kelulusanJK_id;
$this->params['breadcrumbs'][] = ['label' => 'Kelulusan Jks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kelulusanJK_id, 'url' => ['view', 'id' => $model->kelulusanJK_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelulusan-jk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
