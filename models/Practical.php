<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "practical".
 *
 * @property integer $id
 * @property integer $theme_id
 * @property string $desctiption
 */
class Practical extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $subj_name;
    public $theme_name;

    public static function tableName()
    {
        return 'practical';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['theme_id', 'desctiption'], 'required'],
            [['theme_id'], 'integer'],
            [['desctiption'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'theme_id' => 'Дисциплина и тема',
            'desctiption' => 'Содержание',
            'subj_name'=>'Дисциплина',
            'theme_name'=>'Тема',
        ];
    }

    public function getTheme()
    {
        return $this->hasOne(Theme::className(), ['id'=>'theme_id']);
    }
}
