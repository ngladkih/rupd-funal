<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 20.01.2017
 * Time: 14:17
 */

namespace app\models;


use yii\base\Model;

class Document extends Model
{
    public $code;

    public function rules()
    {
        return [
            ['code', 'string']
        ];
    }
}