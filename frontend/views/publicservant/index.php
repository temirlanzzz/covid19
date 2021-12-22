<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchPublicservant */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publicservants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicservant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Publicservant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email:email',
            'department',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
