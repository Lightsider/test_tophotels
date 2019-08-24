<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Consultants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consultants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dir_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dir_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dir_hotel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dir_stars')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
