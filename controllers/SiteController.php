<?php

namespace app\controllers;

use app\models\CustomOrderForm;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public $layout = '@app/views/layouts/site.php';

    /**
     * {@inheritdoc}
     */
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
     * Отображение главной страницы
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Путь для сохранения формы нестандартного заказа
     *
     * @return $this|\yii\web\Response
     */
    public function actionSendCustomForm()
    {
        $model = new CustomOrderForm();
        if ($model->load(Yii::$app->request->post(),"")) {
            if ($order = $model->saveOrder()) {

                Yii::$app->mailer->compose()
                    ->setTo( Yii::$app->params['receiverEmail'])
                    ->setFrom(Yii::$app->params['senderEmail'])
                    ->setSubject(Yii::$app->params['senderEmailSubject'])
                    ->setTextBody(Yii::$app->params['senderEmailBody'].$order->id)
                    ->send();
                return $this->asJson(["status"=>"success"]);
            }
            else return $this->asJson(["status"=>"error"])->setStatusCode(400);
        }
        else return $this->asJson(["status"=>"fail"])->setStatusCode(500);
    }

}
