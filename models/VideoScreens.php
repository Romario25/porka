<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video_screens".
 *
 * @property integer $id
 * @property integer $video_id
 * @property string $screen_url
 *
 * @property Video $video
 */
class VideoScreens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video_screens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['video_id'], 'integer'],
            [['screen_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'video_id' => 'Video ID',
            'screen_url' => 'Screen Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideo()
    {
        return $this->hasOne(Video::className(), ['id' => 'video_id']);
    }
}
