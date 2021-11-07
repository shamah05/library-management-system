<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'accNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bookTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SubID')->textInput() ?>

    <?= $form->field($model, 'authorName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PublisherName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
