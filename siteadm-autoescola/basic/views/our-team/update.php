<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\OurTeam $model */

$this->title = 'Update Our Team: ' . $model->idour_team;
$this->params['breadcrumbs'][] = ['label' => 'Our Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idour_team, 'url' => ['view', 'idour_team' => $model->idour_team]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="our-team-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
