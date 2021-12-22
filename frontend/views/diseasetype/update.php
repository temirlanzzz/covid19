<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Diseasetype */

$this->title = 'Update Diseasetype: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Diseasetypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diseasetype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
