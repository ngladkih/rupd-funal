<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Протоколы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protocol-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'number',
            'date',
            [
                'attribute' => 'department_id',
                'value' => function($data){
                    return $data->department->name;
                }
            ],

            [
            'class' => 'yii\grid\ActionColumn',
             'template' => '{update} {delete}',
            ],
        ],
    ]); ?>
</div>
