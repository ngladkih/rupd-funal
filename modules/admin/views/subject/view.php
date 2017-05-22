<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Дисциплины', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-view">

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
            'code',
            'name',
            [
                'attribute'=>'institute_id',
                'value'=>$model->institute->name
            ],
            [
                'attribute'=>'department_id',
                'value'=>$model->department->name
            ],
            [
                'attribute'=>'teacher_id',
                'value'=>$model->teacher->fio
            ],
            [
                'attribute'=>'form_learn_id',
                'value'=>$model->form_l->name
            ],
            [
                'attribute'=>'first_competence',
                'value'=>$model->first_c->code
            ],
            [
                'attribute'=>'second_competence',
                'value'=>$model->second_c->code
            ],
            [
                'attribute'=>'third_competence',
                'value'=>$model->third_c->code
            ],
            'control_form',
            'semester',
            'lect_hours',
            'lab_hours',
            'pract_hours',
            'independent_work',
            'control',
            'credits',
            'target:ntext',
            'tasks:ntext',
            'discipline_place:ntext',
            'know:ntext',
            'can:ntext',
            'own:ntext',
            'features:ntext',
            [
                'attribute'=>'module_id',
                'value'=>$model->module->title
            ],
        ],
    ]) ?>

</div>
