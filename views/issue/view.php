<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IssueReturn */

$this->title = $model->transID;
$this->params['breadcrumbs'][] = ['label' => 'Issue Returns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="issue-return-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'transID' => $model->transID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'transID' => $model->transID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'transID',
            'userID',
            'AccNumber',
            'IssueDate',
            'ExpRetDate',
            'ActRetDate',
            'OverdueDays',
        ],
    ]) ?>

</div>
