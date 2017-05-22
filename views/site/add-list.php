<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php $form = ActiveForm::begin(/*['action' => 'site/document']*/) ?>
            <div class="panel panel-success">
                <div class="panel-heading"><h4>Перечень тем <?= $title ?> занятий</h4></div>
                <div class="panel-body list-container">
                    <div class="row">
                        <div class="col-md-12 text-input-list"><?= $form->field($model, 'theme_id')->dropDownList($array, ['options'=>[Yii::$app->session->get('theme')=>['Selected' => true]], 'data-route'=>Url::toRoute('site/list-hour')]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'desctiption')->textarea(['rows' => 5]) ?></div>
                    </div>
                    <div class="row">
                    <div class="hours col-md-4">
                    </div>
                        <div class="col-md-8">
                            <?= Html::submitButton('Прикрепить', ['class' => 'btn btn-success col-md-offset-9 col-md-3']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
