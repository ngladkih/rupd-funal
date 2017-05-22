<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "found".
 *
 * @property integer $id
 * @property integer $theme_id
 * @property string $know
 * @property string $can
 * @property string $own
 * @property integer $first_competence
 * @property integer $second_competence
 * @property integer $third_competence
 */
class Found extends \yii\db\ActiveRecord
{
    public $subj_name;
    public $theme_name;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'found';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['theme_id', 'required'],
            ['theme_id', 'validateTheme'],
            [['theme_id', 'first_mark', 'second_mark', 'third_mark'], 'integer'],
            [['know', 'can', 'own'], 'string'],
        ];
    }

    public function validateTheme($attribute, $params)
    {
        $theme = Found::findOne(['theme_id'=>$this->theme_id]);
        if ($theme) $this->addError($attribute, 'ФОС для данной темы уже заполнен');
    }

    /**
     * @inheritdoc
     */

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'theme_id' => 'Дисциплина и тема',
            'know' => 'Знать',
            'can' => 'Уметь',
            'own' => 'Владеть',
            'first_mark' => 'Оценочное ср-во',
            'second_mark' => 'Оценочное ср-во',
            'third_mark' => 'Оценочное ср-во',
            'subj_name'=>'Дисциплина',
            'theme_name'=>'Тема',
        ];
    }

    public function getFirst_m()
    {
       return $this->hasOne(Marks::className(),['id'=>'first_mark']);
    }
    public function getSecond_m()
    {
       return $this->hasOne(Marks::className(),['id'=>'second_mark']);
    }
    public function getThird_m()
    {
       return $this->hasOne(Marks::className(),['id'=>'third_mark']);
    }
    public function getTheme()
    {
       return $this->hasOne(Theme::className(),['id'=>'theme_id']);
    }
}
