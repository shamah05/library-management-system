<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subjects */
?>
<div class="subjects-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'subID',
            'subName',
        ],
    ]) ?>

</div>
