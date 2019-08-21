<?php

use app\models\Orders;
use yii\queue\ExecEvent;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'queue'],
    'controllerNamespace' => 'app\commands',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@tests' => '@app/tests',
        '@web' => '@app/web'
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'queue' => [
            'class' => \yii\queue\db\Queue::class,
            'db' => 'db',
            'tableName' => '{{%queue}}',
            'channel' => 'default',
            'mutex' => 'yii\mutex\FileMutex',
            'on beforeExec' => function ($event) {
                $queue = $event->sender;
                $order = Orders::find()->where('id = :id', [':id' => $event->job->getOrder()->id])->one();
                $event->job->setOrder($order);
                return true;
            }
        ],
        'urlManager' => [
            'baseUrl' => 'http://localhost:8080/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'send-custom-form' => 'site/send-custom-form',
                'send-hard-form-one-step' => 'site/send-hard-form-one-step',
                'send-hard-form-two-step' => 'site/send-hard-form-two-step',
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => 'testforobivan@yandex.ru',
                'password' => 'd237rewy7',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
    ],
    'params' => $params,
//    'controllerMap' => [
//        'migrate' => [
//            'class' => 'yii\console\controllers\MigrateController',
//            'migrationPath' => null,
//            'migrationNamespaces' => [
//                'yii\queue\db\migrations',
//            ],
//        ],
//    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
