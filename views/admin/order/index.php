<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать заявку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at',
            'direction',
            [
                'attribute' => 'name',
                'format' => 'text',
                'value' => function ($model) {
                    return StringHelper::truncate($model->name, 15);
                }
            ],
            [
                'attribute' => 'phone',
                'format' => 'text',
                'value' => function ($model) {
                    return StringHelper::truncate($model->phone, 15);
                }
            ],
            'email:email',
            'departure_date_numbers_of_nights',
            'peoples_count',
            'budget',
            'tourist_city',
            [
                'attribute' => 'text',
                'format' => 'text',
                'value' => function ($model) {
                    return StringHelper::truncate($model->text, 30);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
