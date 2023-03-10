<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Courses $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'preco1')->textInput() ?>

    <?= $form->field($model, 'desc1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nivel1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracao1')->textInput() ?>

    <?= $form->field($model, 'preco2')->textInput() ?>

    <?= $form->field($model, 'desc2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nivel2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracao2')->textInput() ?>

    <?= $form->field($model, 'preco3')->textInput() ?>

    <?= $form->field($model, 'desc3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nivel3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracao3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
