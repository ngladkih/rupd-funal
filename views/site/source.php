<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Subject;

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php $form = ActiveForm::begin(/*['action' => 'site/document']*/) ?>
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Библиографический список</h4></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6"><?= $form->field($model, 'subject_code')->dropDownList(Subject::find()->select('name')->indexBy('code')->column()) ?></div>
                        <div class="col-md-6"><?= $form->field($model, 'authors') ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-8"><?= $form->field($model, 'title') ?></div>
                        <div class="col-md-4"><?= $form->field($model, 'town') ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-10"><?= $form->field($model, 'publisher') ?></div>
                        <div class="col-md-2"><?= $form->field($model, 'year') ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-10"><?= $form->field($model, 'link') ?></div>
                        <div class="col-md-2"><?= $form->field($model, 'pages') ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"><?= $form->field($model, 'basic')->checkbox() ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?= Html::submitButton('Прикрепить', ['class' => 'btn btn-info col-md-offset-9 col-md-3']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
