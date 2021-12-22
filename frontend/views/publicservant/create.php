<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Publicservant */

$this->title = 'Create Publicservant';
$this->params['breadcrumbs'][] = ['label' => 'Publicservants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicservant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
