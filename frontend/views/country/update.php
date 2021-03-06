<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Country */

$this->title = 'Update Country: ' . $model->cname;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cname, 'url' => ['view', 'id' => $model->cname]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
