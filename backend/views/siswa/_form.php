<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SISWA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NAMA_LENGKAP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT_KOTA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT_RINCI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KELAS')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
