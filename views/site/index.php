<?php
use yii\widgets\ActiveForm;
use app\models\Subject;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<h4>Выберите дисциплину для генерации текстового документа</h4>
<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'code')->label('Название дисциплины')->dropDownList(Subject::find()->select('name')->indexBy('code')->column()) ?>
<?= Html::submitButton('Сгенерировать',['class'=>'btn btn-primary']) ?>
<?php ActiveForm::end() ?>
