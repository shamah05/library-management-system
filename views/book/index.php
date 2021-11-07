<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Book Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-master-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'accNumber',
            'bookTitle',
            'SubID',
            'authorName',
            'PublisherName',
            //'pages',
            //'price',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
