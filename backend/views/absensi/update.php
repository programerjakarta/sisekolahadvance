<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ABSENSI */

$this->title = 'Update Absensi: ' . ' ' . $model->ID_ABSESNI;
$this->params['breadcrumbs'][] = ['label' => 'Absensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_ABSESNI, 'url' => ['view', 'id' => $model->ID_ABSESNI]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="absensi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
