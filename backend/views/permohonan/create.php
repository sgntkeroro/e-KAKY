<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Permohonan */

$this->title = 'Borang Permohonan';
$this->params['breadcrumbs'][] = ['label' => 'Permohonan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permohonan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelmohonbaru' => $modelmohonbaru,
        'modelbukulog' => $modelbukulog,
        'modelsperalatan' => $modelsperalatan,
    ]) ?>

</div>
