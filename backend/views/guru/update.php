<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GURU */

$this->title = 'Update Guru: ' . ' ' . $model->ID_GURU;
$this->params['breadcrumbs'][] = ['label' => 'Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_GURU, 'url' => ['view', 'id' => $model->ID_GURU]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
