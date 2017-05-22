<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "source".
 *
 * @property integer $id
 * @property string $authors
 * @property string $title
 * @property string $town
 * @property string $publisher
 * @property string $year
 * @property integer $pages
 * @property string $link
 * @property integer $basic
 */
class Source extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'source';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year'], 'integer', 'min' => 1800, 'max' => date("Y")],
            [['pages'], 'integer'],
            ['basic', 'boolean'],
            [['authors', 'title', 'town', 'publisher', 'link', 'subject_code'], 'string', 'max' => 255],
            [['authors', 'title', 'town', 'publisher', 'link'], 'trim'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subject_code' => 'Название дисциплины',
            'authors' => 'Автор(-ы)',
            'title' => 'Название',
            'town' => 'Город',
            'publisher' => 'Издательство',
            'year' => 'Год',
            'pages' => 'Страниц',
            'link' => 'Ссылка',
            'basic' => 'Основная',
        ];
    }

    public function getSubject()
    {
        return $this->hasOne(Subject::className(),['code'=>'subject_code']);
    }
}
