<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Consultants */

$this->title = 'Добавить консультанта';
$this->params['breadcrumbs'][] = ['label' => 'Консультанты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consultants-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
