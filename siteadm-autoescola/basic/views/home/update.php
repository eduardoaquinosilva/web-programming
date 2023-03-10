<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Home $model */

$this->title = 'Update Home: ' . $model->idhome;
$this->params['breadcrumbs'][] = ['label' => 'Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idhome, 'url' => ['view', 'idhome' => $model->idhome]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="home-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
