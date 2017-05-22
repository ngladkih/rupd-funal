<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Department;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Protocol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="protocol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
    'language' => 'ru',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?= $form->field($model, 'department_id')->dropDownList(Department::find()->select('name')->indexBy('id')->column()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
