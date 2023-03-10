<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TestimonialSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="testimonial-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idtestimonial') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'profissao') ?>

    <?= $form->field($model, 'comentario') ?>

    <?= $form->field($model, 'url_img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
