<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Disease */

$this->title = 'Update Disease: ' . $model->disease_code;
$this->params['breadcrumbs'][] = ['label' => 'Diseases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->disease_code, 'url' => ['view', 'id' => $model->disease_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="disease-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
