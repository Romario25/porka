<?php

namespace app\modules\admin\controllers;

use HttpException;
use Yii;
use app\models\PhotoCatalog;
use app\models\PhotoCatalogSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PhotoCatalogController implements the CRUD actions for PhotoCatalog model.
 */
class PhotocatalogController extends AdminController
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
     * Lists all PhotoCatalog models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PhotoCatalogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PhotoCatalog model.
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
     * Creates a new PhotoCatalog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PhotoCatalog();


        if ($model->load(Yii::$app->request->post()) ) {

            $model->photosUpload = UploadedFile::getInstance($model, 'photosUpload');
            $model->photoPreviewUpload = UploadedFile::getInstance($model, 'photoPreviewUpload');

            if($model->save()){
                return $this->redirect(['index']);
            }

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PhotoCatalog model.
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
        if ($model->load(Yii::$app->request->post()) ) {

            $model->photosUpload = UploadedFile::getInstance($model, 'photosUpload');
            $model->photoPreviewUpload = UploadedFile::getInstance($model, 'photoPreviewUpload');
            if($model->save()){
                return $this->redirect(['index']);
            }

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PhotoCatalog model.
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
     * Finds the PhotoCatalog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PhotoCatalog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PhotoCatalog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
