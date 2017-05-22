<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Subject;

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php $form = ActiveForm::begin(/*['action' => 'site/document']*/) ?>
            <div class="panel panel-warning">
                <div class="panel-heading"><h4>Учебно-тематическое планирование</h4></div>
                <div class="panel-body">
            <div class="row">
                <div class="col-md-12"><?= $form->field($theme, 'subject_code')->dropDownList(Subject::find()->select('name')->indexBy('code')->column()) ?></div>
            </div>
            <div class="row">
                <div class="col-md-12"><?= $form->field($theme, 'title') ?></div>
            </div>
            <div class="row">
                <div class="col-md-12"><?= $form->field($theme, 'description')->textarea(['rows'=>5]) ?></div>
            </div>
            <div class="row">
                <div class="col-md-6"><?= $form->field($theme, 'lect')->input('number',['value'=>0]) ?></div>
                <div class="col-md-6"><?= $form->field($theme, 'lab')->input('number',['value'=>0]) ?></div>
            </div>
                    <div class="row">
                        <div class="col-md-6"><?= $form->field($theme, 'pract')->input('number',['value'=>0]) ?></div>
                        <div class="col-md-6"><?= $form->field($theme, 'iw')->input('number',['value'=>0]) ?></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= Html::submitButton('Прикрепить', ['class' => 'btn btn-warning col-md-offset-9 col-md-3']) ?>
                </div>
            </div>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
