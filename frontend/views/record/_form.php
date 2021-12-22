<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \frontend\models\PublicServant;

use \frontend\models\Disease;
use \frontend\models\Country;

/* @var $this yii\web\View */
/* @var $model frontend\models\record */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->dropDownList(ArrayHelper::map(PublicServant::find()->all(), 'email', 'email')) ?>

    <?= $form->field($model, 'cname')->dropDownList(ArrayHelper::map(Country::find()->all(), 'cname', 'cname')) ?>

    <?= $form->field($model, 'disease_code')->dropDownList(ArrayHelper::map(Disease::find()->all(), 'disease_code', 'description')) ?>

    <?= $form->field($model, 'total_deaths')->textInput() ?>

    <?= $form->field($model, 'total_patients')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
