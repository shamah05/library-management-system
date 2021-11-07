<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IssueReturn */

$this->title = 'Create Issue Return';
$this->params['breadcrumbs'][] = ['label' => 'Issue Returns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-return-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
