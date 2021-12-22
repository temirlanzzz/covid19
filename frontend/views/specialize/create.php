<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Specialize */

$this->title = 'Create Specialize';
$this->params['breadcrumbs'][] = ['label' => 'Specializes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specialize-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
