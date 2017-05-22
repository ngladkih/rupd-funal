<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $id
 * @property string $fio
 * @property string $degree
 * @property string $title
 * @property string $post
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'degree', 'title', 'post'], 'required'],
            [['fio', 'degree', 'title', 'post'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels(){
        return [
            'fio'=>'ФИО',
            'degree'=>'Ученая степень',
            'title'=>'Звание',
            'post'=>'Пост',
        ];
    }
}
