<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AdminAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AdminAsset::register($this);

//if(!Yii::$app->user->isGuest)
//{
//    $user=new \app\models\User();
//    $user=\app\models\User::findIdentity(Yii::$app->user->id);
//}
?>
<?php $this->beginPage() ?>

    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => /*$user->name*/"Панель администратора",
            'brandUrl' => "/admin/order",
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Заявки', 'url' => ['/admin/order']],
                ['label' => 'К основному сайту', 'url' => ['/']]
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container-fluid">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">For TopHotels &copy;  <?= date('Y') ?></p>

            <p class="pull-right">by Obi-Wan Kenobi</p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php
    $this->endPage() ;
?>