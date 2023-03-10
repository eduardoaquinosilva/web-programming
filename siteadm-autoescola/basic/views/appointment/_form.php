<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Appointment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="appointment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_curso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_carro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menssagem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'data_hora')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
