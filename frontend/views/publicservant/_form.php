<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \frontend\models\Users;
use \frontend\models\PublicServant;
use \frontend\models\Doctor;
$users = Users::find()->all();
$servants = ArrayHelper::getColumn(PublicServant::find()->all(), 'email');
$doctors = ArrayHelper::getColumn(Doctor::find()->all(), 'email');
$emails = array_merge($servants, $doctors);
/* @var $this yii\web\View */
/* @var $model frontend\models\Publicservant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicservant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->dropDownList(ArrayHelper::map(Users::find()->where(['NOT IN', 'email', $emails])->all(), 'email', 'email')) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
