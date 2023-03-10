<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CoursesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="courses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcourses') ?>

    <?= $form->field($model, 'preco1') ?>

    <?= $form->field($model, 'desc1') ?>

    <?= $form->field($model, 'nivel1') ?>

    <?= $form->field($model, 'duracao1') ?>

    <?php // echo $form->field($model, 'preco2') ?>

    <?php // echo $form->field($model, 'desc2') ?>

    <?php // echo $form->field($model, 'nivel2') ?>

    <?php // echo $form->field($model, 'duracao2') ?>

    <?php // echo $form->field($model, 'preco3') ?>

    <?php // echo $form->field($model, 'desc3') ?>

    <?php // echo $form->field($model, 'nivel3') ?>

    <?php // echo $form->field($model, 'duracao3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
