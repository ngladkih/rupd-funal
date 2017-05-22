<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Competence */

$this->title = 'Добавить компетенцию';
$this->params['breadcrumbs'][] = ['label' => 'Компетенции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competence-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
