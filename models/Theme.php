<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "theme".
 *
 * @property integer $id
 * @property integer $subject_id
 * @property integer $number
 * @property string $title
 * @property string $description
 * @property integer $lect
 * @property integer $pract
 * @property integer $lab
 * @property integer $iw
 */
class Theme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'theme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_code', 'title', 'description', 'lect', 'pract', 'lab', 'iw'], 'required'],
            [['lect', 'pract', 'lab', 'iw'], 'integer', 'min' => 0],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */

    public function attributeLabels()
    {
        return [
            'subject_code' => 'Название дисциплины',
            'title' => 'Название темы',
            'description' => 'Содержание',
            'lect' => 'Лекций',
            'pract' => 'Практических',
            'lab' => 'Лабораторных',
            'iw' => 'Самостоятельных',
        ];
    }

    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['code' => 'subject_code']);
    }

    public function getLaboratory()
    {
        return $this->hasMany(Laboratory::className(), ['theme_id' => 'id']);
    }

    public function getLectures()
    {
        return $this->hasMany(Lectures::className(), ['theme_id' => 'id']);
    }

    public function getPractical()
    {
        return $this->hasMany(Practical::className(), ['theme_id' => 'id']);
    }

    public function getIndependent()
    {
        return $this->hasMany(Independent::className(), ['theme_id' => 'id']);
    }
    public function getFound()
    {
        return $this->hasOne(Found::className(), ['theme_id' => 'id']);
    }
}
