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

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
