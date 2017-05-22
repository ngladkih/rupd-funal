<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фонд оценочных средств';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="found-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Found', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'attribute'=>'theme_id',
                'value'=>function($data){
                    $subj_name = mb_strimwidth($data->theme->subject->name, 0, 25, '...');
                    $theme_name = mb_strimwidth($data->theme->title, 0, 25, '...');
                    return $subj_name.'/'.$theme_name;
                }
            ],
            'know:ntext',
            'can:ntext',
            'own:ntext',
            // 'first_competence',
            // 'second_competence',
            // 'third_competence',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
