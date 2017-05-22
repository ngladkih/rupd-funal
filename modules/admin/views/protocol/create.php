<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Protocol */

$this->title = 'Добавить протокол';
$this->params['breadcrumbs'][] = ['label' => 'Протоколы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protocol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
