<?php


namespace app\controllers\admin;

use Yii;
use app\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class AdminController extends Controller
{
    public $layout = 'admin';

    public function checkUser()
    {
        if(User::isAdmin())
        {
            return true;
        }
        else return false;
    }

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
}