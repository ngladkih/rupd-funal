<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Competence */

$this->title = $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Компетенции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competence-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=>'code',
                'label'=>'Код'
            ],
            [
                'attribute'=>'name',
                'label'=>'Наименование'
            ],
        ],
    ]) ?>

</div>
