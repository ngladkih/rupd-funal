<?php

namespace app\models;

use Yii;
use app\models\Department;

/**
 * This is the model class for table "protocol".
 *
 * @property integer $id
 * @property integer $number
 * @property string $date
 * @property integer $department_id
 */
class Protocol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'protocol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'date', 'department_id'], 'required'],
            [['number'], 'integer'],
            [['date', 'department_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => '№',
            'date' => 'Дата',
            'department_id' => 'Кафедра',
        ];
    }

    public function getDepartment()
    {
        return $this->hasOne(Department::className(),['id'=>'department_id']);
    }
}
