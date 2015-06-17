<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\ABSENSI */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="absensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_SISWA')->textInput() ?>

    <?= $form->field($model, 'TANGGAL')->textInput() ?>

	<?= $form->field($model, 'TANGGAL')->widget(\yii\jui\DatePicker::classname(), [
    'options' => ['class'=>'form-control']
	]) ?>

    <?= $form->field($model, 'JAM_MASUK')->widget(\yii\jui\DatePicker::classname(), [
    'options' => ['class'=>'form-control']
	]) ?>

    <?= $form->field($model, 'JAM_PULANG')->widget(\yii\jui\DatePicker::classname(), [
    'options' => ['class'=>'form-control']
	]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
