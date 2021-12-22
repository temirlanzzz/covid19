<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \frontend\models\Country;
use yii\helpers\ArrayHelper;
use \frontend\models\Disease;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Discover */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discover-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cname')->dropDownList(ArrayHelper::map(Country::find()->all(), 'cname', 'cname')) ?>

    <?= $form->field($model, 'disease_code')->dropDownList(ArrayHelper::map(Disease::find()->all(), 'disease_code', 'description'))?>

    <?= $form->field($model, 'first_enc_date')->textInput(['placeholder'=>'YYYYmmDD']); ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
