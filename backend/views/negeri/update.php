<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Negeri */

$this->title = 'Update Negeri: ' . ' ' . $model->negeri_id;
$this->params['breadcrumbs'][] = ['label' => 'Negeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->negeri_id, 'url' => ['view', 'id' => $model->negeri_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="negeri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
