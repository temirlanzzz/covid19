<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchDisease */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diseases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disease-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Disease', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'disease_code',
            'pathogen',
            'description',
            'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
