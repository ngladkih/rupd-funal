<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Дисциплины';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!--<p>
         <?= Html::a('Create Subject', ['create'], ['class' => 'btn btn-success']) ?> 
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'code',
            'name',
            [
                'attribute'=>'institute_id',
                'value' => function ($data){
                    return $data->institute->name;
                }
            ],
            [
                'attribute'=>'department_id',
                'value' => function ($data){
                    return $data->department->name;
                }
            ],
            // 'teacher_id',
            // 'form_learn_id',
            // 'first_competence',
            // 'second_competence',
            // 'third_competence',
            // 'control_form',
            // 'semester',
            // 'lect_hours',
            // 'lab_hours',
            // 'pract_hours',
            // 'independent_work',
            // 'control',
            // 'credits',
            // 'target:ntext',
            // 'tasks:ntext',
            // 'discipline_place:ntext',
            // 'know:ntext',
            // 'can:ntext',
            // 'own:ntext',
            // 'features:ntext',
            // 'module_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
