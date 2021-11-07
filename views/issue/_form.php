<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IssueReturn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-return-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userID')->textInput() ?>

    <?= $form->field($model, 'AccNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IssueDate')->textInput() ?>

    <?= $form->field($model, 'ExpRetDate')->textInput() ?>

    <?= $form->field($model, 'ActRetDate')->textInput() ?>

    <?= $form->field($model, 'OverdueDays')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
