<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Practical */

$this->title = 'Create Practical';
$this->params['breadcrumbs'][] = ['label' => 'Practicals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="practical-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
