<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Appointment $model */

$this->title = 'Update Appointment: ' . $model->idappointment;
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idappointment, 'url' => ['view', 'idappointment' => $model->idappointment]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appointment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
