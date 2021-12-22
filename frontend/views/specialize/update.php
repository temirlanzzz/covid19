<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Specialize */

$this->title = 'Update Specialize: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Specializes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'email' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="specialize-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
