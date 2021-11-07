<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IssueReturn */
?>
<div class="issue-return-view">
 
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
