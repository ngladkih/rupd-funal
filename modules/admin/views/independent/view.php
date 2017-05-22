<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Independent */

$this->title = mb_strimwidth($model->desctiption, 0, 20, "...");
$this->params['breadcrumbs'][] = ['label' => 'Самостоятельные', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="independent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
                'attribute'=>'subj_name',
                'value'=>$model->theme->subject->name
            ],
            [
                'attribute'=>'theme_name',
                'value'=>$model->theme->title
            ],
            'desctiption',
        ],
    ]) ?>

</div>
