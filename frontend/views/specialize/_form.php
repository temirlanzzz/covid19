<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \frontend\models\Diseasetype;
use \frontend\models\Doctor;
/* @var $this yii\web\View */
/* @var $model frontend\models\Specialize */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="specialize-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->dropDownList(ArrayHelper::map(Diseasetype::find()->all(), 'id', 'description')) ?>

    <?= $form->field($model, 'email')->dropDownList(ArrayHelper::map(Doctor::find()->all(), 'email', 'email')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
