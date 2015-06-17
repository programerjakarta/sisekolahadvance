<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PELAJARAN */

$this->title = 'Update Pelajaran: ' . ' ' . $model->ID_PELAJARAN;
$this->params['breadcrumbs'][] = ['label' => 'Pelajarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_PELAJARAN, 'url' => ['view', 'id' => $model->ID_PELAJARAN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pelajaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
