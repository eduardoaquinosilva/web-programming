<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Features $model */

$this->title = 'Update Features: ' . $model->idfeatures;
$this->params['breadcrumbs'][] = ['label' => 'Features', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idfeatures, 'url' => ['view', 'idfeatures' => $model->idfeatures]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="features-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
