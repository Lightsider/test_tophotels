<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Консультанты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consultants-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить консультанта', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'dir_country',
            'dir_city',
            'dir_hotel',
            'dir_stars',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
