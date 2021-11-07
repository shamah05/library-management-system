<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BookMaster */

$this->title = 'Create Book Master';
$this->params['breadcrumbs'][] = ['label' => 'Book Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
