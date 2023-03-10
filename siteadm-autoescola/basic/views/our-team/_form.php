<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\OurTeam $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="our-team-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_img1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_facebook1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_twitter1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_instagram1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_img2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_facebook2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_twitter2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_instagram2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_img3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_facebook3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_twitter3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_instagram3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_img4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_facebook4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_twitter4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_instagram4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
