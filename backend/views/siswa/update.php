<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SISWA */

$this->title = 'Update Siswa: ' . ' ' . $model->ID_SISWA;
$this->params['breadcrumbs'][] = ['label' => 'Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_SISWA, 'url' => ['view', 'id' => $model->ID_SISWA]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
