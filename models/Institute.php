<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "institute".
 *
 * @property integer $id
 * @property string $name
 * @property string $abbreviation
 * @property string $director
 */
class Institute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'institute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'abbreviation', 'director'], 'required'],
            [['name', 'abbreviation', 'director'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Наименование',
            'abbreviation' => 'Аббривиатура',
            'director' => 'Директор',
        ];
    }
}
