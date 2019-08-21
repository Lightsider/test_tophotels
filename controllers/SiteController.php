<?php

namespace app\controllers;

use app\jobs\MailDelayJob;
use app\models\CustomOrderForm;
use app\models\HardOrderFormOneStep;
use app\models\HardOrderFormTwoStep;
use app\models\Orders;
use Yii;
use yii\queue\Queue;
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
        if ($model->load(Yii::$app->request->post(), "")) {
            if ($order = $model->saveOrder()) {

                $order->sendEmailNotification();
                return $this->asJson(["status" => "success"]);
            } else {
                return $this->asJson(["status" => "error"])->setStatusCode(500);
            }
        } else {
            return $this->asJson(["status" => "fail"])->setStatusCode(400);
        }
    }

    /**
     * Путь для сохранения сложной формы на первом шаге
     *
     * @return $this|\yii\web\Response
     */
    public function actionSendHardFormOneStep()
    {
        $model = new HardOrderFormOneStep();
        if ($model->load(Yii::$app->getRequest()->getBodyParams(), '')) {
            if ($order = $model->saveOrder()) {

                Yii::$app->queue->delay(2 * 60)->push(new MailDelayJob([
                    'order' => $order,
                ]));

                return $this->asJson(["status" => "success","id" => $order->id]);
            } else {
                return $this->asJson(["status" => "error"])->setStatusCode(500);
            }
        } else {
            return $this->asJson(["status" => "fail"])->setStatusCode(400);
        }
    }

    /**
     * Путь для сохранения сложной формы на втором шаге
     *
     * @return $this|\yii\web\Response
     */
    public function actionSendHardFormTwoStep()
    {
        $model = new HardOrderFormTwoStep();
        if ($model->load(Yii::$app->request->post(), "")) {
            if ($order = $model->saveOrder()) {
                return $this->asJson(["status" => "success"]);
            } else {
                return $this->asJson(["status" => "error"])->setStatusCode(500);
            }
        } else {
            return $this->asJson(["status" => "fail"])->setStatusCode(400);
        }
    }

}
