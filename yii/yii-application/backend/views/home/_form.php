<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Home $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="home-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'banner1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'banner2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
