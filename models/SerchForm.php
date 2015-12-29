<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 29.12.15
 * Time: 0:11
 */

namespace app\models;


use yii\base\Model;

class SerchForm extends Model
{
    public $searchString;
    public $type;

    public function rules()
    {
        return [
            [['searchString', 'type'], 'required'],
            ['searchString', 'string', 'max'=>255],
            ['type', 'integer']
        ];
    }



}