<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Features $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="features-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
