<?php
use yii\helpers\Html;
// use yii\widgets\ActiveForm;
// use yii\jui\DatePicker;
use kartik\time\TimePicker;
use yii\helpers\ArrayHelper;
use backend\models\SISWA;
use kartik\widgets\DepDrop;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\ABSENSI */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="absensi-form">
    <?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'ID_SISWA')->dropDownList(ArrayHelper::map(SISWA::find()->all(), 'ID_SISWA', 'NAMA_LENGKAP')); ?>
    <?php echo $form->field($model, 'TANGGAL')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date ...'],
    'pluginOptions' => [
    'autoclose'=>true,
    'format' => 'yyyy-mm-dd'
    ]
    ]); ?>
    <div class="form-group">
        <?php echo '<label>JAM MASUK</label>';
        echo TimePicker::widget(['model' => $model,
        'attribute' => 'JAM_MASUK',
        'pluginOptions' => [
        'showSeconds' => true,
        'showMeridian' => false,
        'minuteStep' => 1,
        'secondStep' => 5,
        ]]); ?>
    </div>
    
    <div class="form-group">
        <?php echo '<label>JAM PULANG</label>';
        echo TimePicker::widget(['model' => $model, 'attribute' => 'JAM_PULANG',
        'pluginOptions' => [
        'showSeconds' => true,
        'showMeridian' => false,
        'minuteStep' => 1,
        'secondStep' => 5,
        ]]); ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>