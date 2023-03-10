<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Courses $model */

$this->title = 'Update Courses: ' . $model->idcourses;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcourses, 'url' => ['view', 'idcourses' => $model->idcourses]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="courses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
