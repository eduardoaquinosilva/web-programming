<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Testimonial $model */

$this->title = 'Update Testimonial: ' . $model->idtestimonial;
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtestimonial, 'url' => ['view', 'idtestimonial' => $model->idtestimonial]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testimonial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
