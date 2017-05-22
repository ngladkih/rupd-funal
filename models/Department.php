<?php

namespace app\models;

use Yii;
use app\models\Protocol;

/**
 * This is the model class for table "department".
 *
 * @property integer $id
 * @property string $name
 * @property string $abbreviation
 * @property string $head
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'abbreviation', 'head'], 'required'],
            [['name', 'abbreviation', 'head'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'abbreviation' => 'Аббривиатура',
            'head' => 'Заведующий',
        ];
    }

    public function getProtocol()
    {
        return $this->hasMany(Protocol::className(), ['department_id'=>'id']);
    }
}
