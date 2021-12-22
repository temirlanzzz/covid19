<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\record */

$this->title = 'Update Record: ' . $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email, 'url' => ['view', 'email' => $model->email, 'cname' => $model->cname, 'disease_code' => $model->disease_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
