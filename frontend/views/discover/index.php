<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchDiscover */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Discovers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discover-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Discover', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cname',
            'disease_code',
            'first_enc_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
