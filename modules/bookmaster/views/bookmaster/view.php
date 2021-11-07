<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BookMaster */
?>
<div class="book-master-view">
 
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
