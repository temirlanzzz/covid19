<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchRecord */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email:email',
            'cname',
            'disease_code',
            'total_deaths',
            'total_patients',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
