<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PhotoCatalog;

/**
 * PhotoCatalogSearch represents the model behind the search form about `app\models\PhotoCatalog`.
 */
class PhotoCatalogSearch extends PhotoCatalog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'plus', 'minus', 'hits'], 'integer'],
            [['title', 'create_at', 'update_at', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PhotoCatalog::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        if(!Yii::$app->user->can('admin')){
            $query->andFilterWhere([
                'block_edit' => 0
            ]);
        }


        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'plus' => $this->plus,
            'minus' => $this->minus,
            'hits' => $this->hits,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);
        $query->orderBy('id DESC');
        return $dataProvider;
    }
}
