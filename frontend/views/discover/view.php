<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Discover */

$this->title = $model->cname;
$this->params['breadcrumbs'][] = ['label' => 'Discovers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="discover-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'cname' => $model->cname, 'disease_code' => $model->disease_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'cname' => $model->cname, 'disease_code' => $model->disease_code], [
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
            'cname',
            'disease_code',
            'first_enc_date',
        ],
    ]) ?>

</div>
