<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StatusMesyuarat */

$this->title = 'Create Status Mesyuarat';
$this->params['breadcrumbs'][] = ['label' => 'Status Mesyuarats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-mesyuarat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
