<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Discover */

$this->title = 'Update Discover: ' . $model->cname;
$this->params['breadcrumbs'][] = ['label' => 'Discovers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cname, 'url' => ['view', 'cname' => $model->cname, 'disease_code' => $model->disease_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="discover-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
