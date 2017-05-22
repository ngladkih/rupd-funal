<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Independent */

$this->title = 'Create Independent';
$this->params['breadcrumbs'][] = ['label' => 'Independents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="independent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
