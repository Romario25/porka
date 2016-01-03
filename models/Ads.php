<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $code
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'url', 'code'], 'required'],
            [['code'], 'string'],
            [['title', 'url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'url' => 'Url',
            'code' => 'Code',
        ];
    }
}
