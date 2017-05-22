<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Institute;
use app\models\Department;
use app\models\Teacher;
use app\models\Competence;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institute_id')->dropDownList(Institute::find()->select('name')->indexBy('id')->column()) ?>

    <?= $form->field($model, 'department_id')->dropDownList(Department::find()->select('name')->indexBy('id')->column()) ?>

    <?= $form->field($model, 'teacher_id')->dropDownList(Teacher::find()->select('fio')->indexBy('id')->column()) ?>

    <?= $form->field($model, 'form_learn_id')->textInput() ?>

    <?= $form->field($model, 'first_competence')->dropDownList(Competence::find()->select('code')->indexBy('id')->column()) ?>

    <?= $form->field($model, 'second_competence')->dropDownList(Competence::find()->select('code')->indexBy('id')->column()) ?>

    <?= $form->field($model, 'third_competence')->dropDownList(Competence::find()->select('code')->indexBy('id')->column()) ?>

    <?= $form->field($model, 'control_form')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lect_hours')->textInput() ?>

    <?= $form->field($model, 'lab_hours')->textInput() ?>

    <?= $form->field($model, 'pract_hours')->textInput() ?>

    <?= $form->field($model, 'independent_work')->textInput() ?>

    <?= $form->field($model, 'control')->textInput() ?>

    <?= $form->field($model, 'credits')->textInput() ?>

    <?= $form->field($model, 'target')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tasks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'discipline_place')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'know')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'can')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'own')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'features')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'module_id')->radioList(\app\models\DisciplineModule::find()->select('title')->indexBy('id')->column()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
