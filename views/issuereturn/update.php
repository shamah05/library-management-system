<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IssueReturn */

$this->title = 'Update Issue Return: ' . $model->transID;
$this->params['breadcrumbs'][] = ['label' => 'Issue Returns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->transID, 'url' => ['view', 'transID' => $model->transID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="issue-return-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
