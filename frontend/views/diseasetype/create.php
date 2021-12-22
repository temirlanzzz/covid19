<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Diseasetype */

$this->title = 'Create Diseasetype';
$this->params['breadcrumbs'][] = ['label' => 'Diseasetypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diseasetype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
