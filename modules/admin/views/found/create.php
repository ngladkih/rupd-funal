<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Found */

$this->title = 'Create Found';
$this->params['breadcrumbs'][] = ['label' => 'Founds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="found-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
