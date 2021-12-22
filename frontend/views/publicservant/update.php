<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Publicservant */

$this->title = 'Update Publicservant: ' . $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Publicservants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email, 'url' => ['view', 'id' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publicservant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
