<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property integer $id
 * @property integer $catalog_id
 * @property string $url
 * @property string $url_thumbnail
 * @property integer $sort
 *
 * @property PhotoCatalog $catalog
 */
class Photos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catalog_id', 'sort'], 'integer'],
            [['url', 'url_thumbnail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catalog_id' => 'Catalog ID',
            'url' => 'Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalog()
    {
        return $this->hasOne(PhotoCatalog::className(), ['id' => 'catalog_id']);
    }
}
