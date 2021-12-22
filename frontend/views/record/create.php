<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\record */

$this->title = 'Create Record';
$this->params['breadcrumbs'][] = ['label' => 'Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
