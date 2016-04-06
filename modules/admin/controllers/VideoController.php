<?php

namespace app\modules\admin\controllers;

use app\models\Config;
use Yii;
use app\models\Video;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * VideoController implements the CRUD actions for Video model.
 */
class VideoController extends AdminController
{
    public function behaviors()
    {

        $arr = ArrayHelper::merge(parent::behaviors(), [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ]);

        return $arr;
    }

    /**
     * Lists all Video models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Video::find();
        if(!Yii::$app->user->can('admin')){
            $query->andFilterWhere([
                'block_edit' => 0
            ]);
        }
        $query->orderBy('id DESC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Video model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Video model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {



        $model = new Video();

        if ($model->load(Yii::$app->request->post())) {

            $model->videoFile = UploadedFile::getInstances($model, 'videoFile');
            $model->screenFiles = UploadedFile::getInstances($model, 'screenFiles');
            $model->screenShotVideo = UploadedFile::getInstance($model, 'screenShotVideo');


            if($model->save()){
                return $this->redirect(['index']);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Video model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if($model->block_edit == 1 && !Yii::$app->user->can('admin')){
            throw new HttpException(403, 'Доступ запрещен');
        }

        if ($model->load(Yii::$app->request->post())) {
            $model->videoFile = UploadedFile::getInstances($model, 'videoFile');
            $model->screenFiles = UploadedFile::getInstances($model, 'screenFiles');
            $model->screenShotVideo = UploadedFile::getInstance($model, 'screenShotVideo');
            if($model->save()){
                return $this->redirect(['index']);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }

        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Video model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Video model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Video the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Video::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
