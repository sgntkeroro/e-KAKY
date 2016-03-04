<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Fakulti */

$this->title = 'Create Fakulti';
$this->params['breadcrumbs'][] = ['label' => 'Fakultis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakulti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
