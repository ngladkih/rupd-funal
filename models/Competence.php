<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "competence".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 */
class Competence extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'competence';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['code', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Код',
            'name' => 'Наименование',
        ];
    }
}
