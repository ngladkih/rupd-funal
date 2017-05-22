<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Marks;
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php $form = ActiveForm::begin(/*['action' => 'site/document']*/) ?>
            <div class="panel panel-danger">
                <div class="panel-heading"><h4>Фонд оценочных средств</h4></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'theme_id')->dropDownList($array, ['options'=>[Yii::$app->session->get('theme')=>['Selected' => true]]]) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-9"><?= $form->field($model, 'know')->textarea(['rows' => 5])->hint('разделяйте пункты символом ";", после последнего символы не требуются') ?></div>
                        <div class="col-md-3"><?= $form->field($model, 'first_mark')->dropDownList(Marks::find()->select('name')->indexBy('id')->column(),['prompt'=>'']) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-9"><?= $form->field($model, 'can')->textarea(['rows' => 5])->hint('разделяйте пункты символом ";", после последнего символы не требуются') ?></div>
                        <div class="col-md-3"><?= $form->field($model, 'second_mark')->dropDownList(Marks::find()->select('name')->indexBy('id')->column(),['prompt'=>'']) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-9"><?= $form->field($model, 'own')->textarea(['rows' => 5])->hint('разделяйте пункты символом ";", после последнего символы не требуются') ?></div>
                        <div class="col-md-3"><?= $form->field($model, 'third_mark')->dropDownList(Marks::find()->select('name')->indexBy('id')->column(),['prompt'=>'']) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= Html::submitButton('Прикрепить', ['class' => 'btn btn-danger col-md-offset-9 col-md-3']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
