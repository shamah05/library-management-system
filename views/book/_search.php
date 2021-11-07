<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'accNumber') ?>

    <?= $form->field($model, 'bookTitle') ?>

    <?= $form->field($model, 'SubID') ?>

    <?= $form->field($model, 'authorName') ?>

    <?= $form->field($model, 'PublisherName') ?>

    <?php // echo $form->field($model, 'pages') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
