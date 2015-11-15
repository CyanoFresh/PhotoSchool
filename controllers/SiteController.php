<?php

namespace app\controllers;

use app\models\Form;
use app\models\Portfolio;
use app\models\Reviews;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;

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

    /**
     * Render home page
     */
    public function actionIndex()
    {
        $model = new Form();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            $model->images = UploadedFile::getInstances($model, 'images');

            if ($model->upload()) {
                return $this->render('success', [
                    'model' => $model,
                ]);
            } else {
                return $this->render('fail', [
                    'model' => $model,
                ]);
            }
        }

        return $this->render('index', [
            'model' => $model,
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

    public function actionPortfolio()
    {
        $model = new Portfolio();

        return $this->render('portfolio', [
            'model' => $model,
        ]);
    }

    public function actionReviews()
    {
        $model = new Reviews();

        return $this->render('reviews', [
            'model' => $model,
        ]);
    }

    public function actionStudio()
    {
        return $this->render('about');
    }
}
