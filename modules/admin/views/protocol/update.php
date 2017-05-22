<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Protocol */

$this->title = 'Редактирование: Протокол: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Протоколы', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="protocol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
