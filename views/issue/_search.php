<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IssueReturnSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-return-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'transID') ?>

    <?= $form->field($model, 'userID') ?>

    <?= $form->field($model, 'AccNumber') ?>

    <?= $form->field($model, 'IssueDate') ?>

    <?= $form->field($model, 'ExpRetDate') ?>

    <?php // echo $form->field($model, 'ActRetDate') ?>

    <?php // echo $form->field($model, 'OverdueDays') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
