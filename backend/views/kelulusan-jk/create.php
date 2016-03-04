<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\KelulusanJk */

$this->title = 'Create Kelulusan Jk';
$this->params['breadcrumbs'][] = ['label' => 'Kelulusan Jks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelulusan-jk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
