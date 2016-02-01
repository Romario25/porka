<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main_page".
 *
 * @property integer $id
 * @property string $title_video
 * @property string $description_video
 * @property string $title_photo
 * @property string $description_photo
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class MainPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_video', 'description_video', 'title_photo', 'description_photo'], 'required'],
            [['description_video', 'description_photo'], 'string'],
            [['title_video', 'title_photo', 'meta_title', 'meta_keywords', 'meta_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_video' => 'Заголовок блока видео',
            'description_video' => 'Описание блока видео',
            'title_photo' => 'Заголовок блока фото',
            'description_photo' => 'Описание блока фото',
            'meta_title' => 'Title страницы',
            'meta_keywords' => 'Keywords',
            'meta_description' => 'Description',
        ];
    }
}
