<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\KELAS;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GURU */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guru-form">

    <?php $form = ActiveForm::begin(); ?>

	<?php echo $form->field($model, 'ID_KELAS')->dropDownList(ArrayHelper::map(KELAS::find()->all(), 'ID_KELAS', 'NAMA_KELAS')); ?>


    <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
