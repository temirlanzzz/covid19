<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \frontend\models\Diseasetype;

/* @var $this yii\web\View */
/* @var $model frontend\models\Disease */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disease-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'disease_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pathogen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id')->dropDownList(ArrayHelper::map(Diseasetype::find()->all(), 'id', 'description'))?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
