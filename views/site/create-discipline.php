<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Institute;
use app\models\Department;
use app\models\Teacher;
use app\models\Competence;
use app\models\FormLearn;
use app\models\Semester;

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php $form = ActiveForm::begin(/*['action' => 'site/document']*/) ?>
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Ввод данных по дисциплине</h4></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3"><?= $form->field($subject, 'code') ?></div>
                        <div class="col-md-9"><?= $form->field($subject, 'name') ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($subject, 'institute_id')->dropDownList(Institute::find()->select('name')->indexBy('id')->column()) ?></div>
                        <div class="col-md-12"><?= $form->field($subject, 'department_id')->dropDownList(Department::find()->select('name')->indexBy('id')->column()) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($subject, 'town')->textInput() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><?= $form->field($subject, 'control_form') ?></div>
                        <div class="col-md-4"><?= $form->field($subject, 'semester') ?></div>
                        <div class="col-md-4"><?= $form->field($subject, 'form_learn_id')->dropDownList(FormLearn::find()->select('name')->indexBy('id')->column()) ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-6"><?= $form->field($subject, 'lect_hours')->input('number',['value'=>0]) ?></div>
                        <div class="col-md-6"><?= $form->field($subject, 'pract_hours')->input('number',['value'=>0]) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><?= $form->field($subject, 'lab_hours')->input('number',['value'=>0]) ?></div>
                        <div class="col-md-6"><?= $form->field($subject, 'independent_work')->input('number',['value'=>0]) ?></div>

                    </div>
                    <div class="row">
                        <div class="col-md-6"><?= $form->field($subject, 'control')->input('number',['value'=>0]) ?></div>
                        <div class="col-md-6"><?= $form->field($subject, 'credits')->input('number',['value'=>1]) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($subject, 'teacher_id')->dropDownList(Teacher::find()->select('fio')->indexBy('id')->column()) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><?= $form->field($subject, 'first_competence')->dropDownList(Competence::find()->select('code')->indexBy('id')->column(),['prompt'=>'']) ?></div>
                        <div class="col-md-4"><?= $form->field($subject, 'second_competence')->dropDownList(Competence::find()->select('code')->indexBy('id')->column(),['prompt'=>'']) ?></div>
                        <div class="col-md-4"><?= $form->field($subject, 'third_competence')->dropDownList(Competence::find()->select('code')->indexBy('id')->column(),['prompt'=>'']) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($subject, 'module_id')->radioList(\app\models\DisciplineModule::find()->select('title')->indexBy('id')->column()) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($subject, 'target')->textarea() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($subject, 'tasks')->textarea()->hint('разделяйте пункты символом ";", после последнего символы не требуются') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($subject, 'discipline_place')->textarea() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($subject, 'know')->textarea()->hint('разделяйте пункты символом ";", после последнего символы не требуются') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($subject, 'can')->textarea()->hint('разделяйте пункты символом ";", после последнего символы не требуются') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($subject, 'own')->textarea()->hint('разделяйте пункты символом ";", после последнего символы не требуются') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($subject, 'features')->textarea() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= Html::submitButton('Создать', ['class' => 'btn btn-default col-md-offset-9 col-md-3']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
