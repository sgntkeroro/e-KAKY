<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Cawangan */

$this->title = 'Create Cawangan';
$this->params['breadcrumbs'][] = ['label' => 'Cawangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cawangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
