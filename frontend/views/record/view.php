<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\record */

$this->title = $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'email' => $model->email, 'cname' => $model->cname, 'disease_code' => $model->disease_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'email' => $model->email, 'cname' => $model->cname, 'disease_code' => $model->disease_code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'email:email',
            'cname',
            'disease_code',
            'total_deaths',
            'total_patients',
        ],
    ]) ?>

</div>
