<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Компетенции';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competence-index">

    <h1><?= Html::encode($this->title) ?></h1>

   <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'code',
                'label'=>'Код'
            ],
            [
                'attribute'=>'name',
                'label'=>'Наименование'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
