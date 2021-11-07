<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BookMaster */

$this->title = 'Update Book Master: ' . $model->accNumber;
$this->params['breadcrumbs'][] = ['label' => 'Book Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->accNumber, 'url' => ['view', 'accNumber' => $model->accNumber]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
