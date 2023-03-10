<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\OurTeam $model */

$this->title = 'Create Our Team';
$this->params['breadcrumbs'][] = ['label' => 'Our Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-team-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
