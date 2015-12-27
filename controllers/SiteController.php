<?php

namespace app\controllers;

use app\models\Config;
use app\models\PhotoCatalog;
use app\models\Video;
use Mailchimp;
use Yii;
use yii\filters\AccessControl;
use yii\validators\EmailValidator;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {

        $videos = Video::find()->all();
        $photos = PhotoCatalog::find()->all();

        return $this->render('index', [
            'videos'=>$videos,
            'photos'=>$photos
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSubscribe(){
        if(Yii::$app->request->isAjax){
            $email = Yii::$app->request->post('email');
            $validator = new EmailValidator();
            if($validator->validate($email)){
                $config = Config::find()->where("name = :name", [":name"=>'mailChimpKey'])->one();
                $mc = new Mailchimp($config['value']);
                $result = $mc->users->invite($email);
                if($result['status'] == 'success'){
                    echo "'Ваш электронный адрес добавлен в подписчики'";
                } else {
                    echo "error";
                }
            } else {
                echo "Неправильный электронный адрес";
            }
        }

    }
}
