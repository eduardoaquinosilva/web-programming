<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\FeaturesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="features-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idfeatures') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'subtitulo') ?>

    <?= $form->field($model, 'desc1') ?>

    <?= $form->field($model, 'desc2') ?>

    <?php // echo $form->field($model, 'desc3') ?>

    <?php // echo $form->field($model, 'desc4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
