<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BookMaster */

$this->title = $model->accNumber;
$this->params['breadcrumbs'][] = ['label' => 'Book Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="book-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'accNumber' => $model->accNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'accNumber' => $model->accNumber], [
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
            'accNumber',
            'bookTitle',
            'SubID',
            'authorName',
            'PublisherName',
            'pages',
            'price',
            'status',
        ],
    ]) ?>

</div>
