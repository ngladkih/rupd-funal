<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Institute */

$this->title = 'Редактирование: ' . $model->abbreviation;
$this->params['breadcrumbs'][] = ['label' => 'Институты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->abbreviation, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="institute-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
