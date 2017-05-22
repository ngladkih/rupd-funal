<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список литературы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="source-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Source', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute'=>'subject_code',
                'value'=>function($data){
                    return $data->subject->name;
                }
            ],
            'authors',
            'title',
            'town',
             'publisher',
            // 'year',
            // 'pages',
            // 'link',
            // 'basic',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
