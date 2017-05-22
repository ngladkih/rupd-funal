<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Found */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="found-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'theme_id')->textInput() ?>

    <?= $form->field($model, 'know')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'can')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'own')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'first_competence')->textInput() ?>

    <?= $form->field($model, 'second_competence')->textInput() ?>

    <?= $form->field($model, 'third_competence')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
