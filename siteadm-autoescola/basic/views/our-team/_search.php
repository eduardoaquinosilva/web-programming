<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\OurTeamSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="our-team-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idour_team') ?>

    <?= $form->field($model, 'nome1') ?>

    <?= $form->field($model, 'cargo1') ?>

    <?= $form->field($model, 'url_img1') ?>

    <?= $form->field($model, 'url_facebook1') ?>

    <?php // echo $form->field($model, 'url_twitter1') ?>

    <?php // echo $form->field($model, 'url_instagram1') ?>

    <?php // echo $form->field($model, 'nome2') ?>

    <?php // echo $form->field($model, 'cargo2') ?>

    <?php // echo $form->field($model, 'url_img2') ?>

    <?php // echo $form->field($model, 'url_facebook2') ?>

    <?php // echo $form->field($model, 'url_twitter2') ?>

    <?php // echo $form->field($model, 'url_instagram2') ?>

    <?php // echo $form->field($model, 'nome3') ?>

    <?php // echo $form->field($model, 'cargo3') ?>

    <?php // echo $form->field($model, 'url_img3') ?>

    <?php // echo $form->field($model, 'url_facebook3') ?>

    <?php // echo $form->field($model, 'url_twitter3') ?>

    <?php // echo $form->field($model, 'url_instagram3') ?>

    <?php // echo $form->field($model, 'nome4') ?>

    <?php // echo $form->field($model, 'cargo4') ?>

    <?php // echo $form->field($model, 'url_img4') ?>

    <?php // echo $form->field($model, 'url_facebook4') ?>

    <?php // echo $form->field($model, 'url_twitter4') ?>

    <?php // echo $form->field($model, 'url_instagram4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
