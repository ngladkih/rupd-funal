<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $institute_id
 * @property integer $department_id
 * @property integer $teacher_id
 * @property integer $form_learn_id
 * @property integer $first_competence
 * @property integer $second_competence
 * @property integer $third_competence
 * @property string $control_form
 * @property integer $lect_hours
 * @property integer $lab_hours
 * @property integer $pract_hours
 * @property integer $contact_hours
 * @property integer $hours
 * @property integer $independent_work
 * @property integer $control
 * @property integer $credits
 * @property string $target
 * @property string $tasks
 * @property string $discipline_place
 * @property string $know
 * @property string $can
 * @property string $own
 * @property string $town
 */
class Subject extends \yii\db\ActiveRecord
{
    public $module_id = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'institute_id', 'department_id', 'teacher_id', 'form_learn_id', 'control_form', 'lect_hours', 'lab_hours', 'pract_hours', 'independent_work', 'control', 'credits', 'target', 'tasks', 'discipline_place', 'know', 'can', 'own', 'module_id', 'semester'], 'required'],
            [['institute_id', 'department_id', 'teacher_id', 'form_learn_id', 'first_competence', 'second_competence', 'third_competence', 'module_id'], 'integer'],
            [['lect_hours', 'lab_hours', 'pract_hours', 'independent_work', 'control'], 'integer', 'min' => 0],
            ['credits', 'integer', 'min' => 1],
            [['target', 'tasks', 'discipline_place', 'know', 'can', 'own', 'features', 'semester', 'town'], 'string'],
            [['code', 'name', 'control_form'], 'string', 'max' => 255],
            // ['code', 'validateSubjectCode'],
        ];
    }

    /*public function validateSubjectCode($attribute, $params)
    {
        $subject = Subject::findOne(['code' => $this->code]);
        if ($subject) $this->addError($attribute, 'Дисциплина уже добавлена');
    }*/

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Код',
            'name' => 'Название',
            'institute_id' => 'Институт',
            'department_id' => 'Кафедра',
            'teacher_id' => 'Преподаватель',
            'form_learn_id' => 'Форма обучения',
            'first_competence' => '1-ая компетенция',
            'second_competence' => '2-ая компетенция',
            'third_competence' => '3-я компетенция',
            'control_form' => 'Форма контроля',
            'lect_hours' => 'Лекций',
            'lab_hours' => 'Лабораторных',
            'pract_hours' => 'Практических',
            'independent_work' => 'Самостоятельных',
            'control' => 'Контроль',
            'credits' => 'Зачетных ед.',
            'target' => 'Цель',
            'tasks' => 'Задачи',
            'discipline_place' => 'Место дисциплины',
            'know' => 'Знать',
            'can' => 'Уметь',
            'own' => 'Владеть',
            'features' => 'Особенности реализации',
            'module_id' => 'Входит в:',
            'semester' => 'Семестр',
            'town' => 'Город',
        ];
    }

    public function getInstitute()
    {
        return $this->hasOne(Institute::className(), ['id' => 'institute_id']);
    }

    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }

    public function getFirst_c()
    {
        return $this->hasOne(Competence::className(), ['id' => 'first_competence']);
    }

    public function getSecond_c()
    {
        return $this->hasOne(Competence::className(), ['id' => 'second_competence']);
    }

    public function getThird_c()
    {
        return $this->hasOne(Competence::className(), ['id' => 'third_competence']);
    }

    public function getForm_l()
    {
        return $this->hasOne(FormLearn::className(), ['id' => 'form_learn_id']);
    }

    public function getTheme()
    {
        return $this->hasMany(Theme::className(), ['subject_code' => 'code']);
    }

    public function getModule()
    {
        return $this->hasOne(DisciplineModule::className(), ['id' => 'module_id']);
    }

    public function getSource()
    {
        return $this->hasMany(Source::className(), ['subject_code' => 'code']);
    }
}
