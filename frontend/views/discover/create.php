<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Discover */

$this->title = 'Create Discover';
$this->params['breadcrumbs'][] = ['label' => 'Discovers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discover-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
