<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Peralatan */

$this->title = 'Create Peralatan';
$this->params['breadcrumbs'][] = ['label' => 'Peralatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peralatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
