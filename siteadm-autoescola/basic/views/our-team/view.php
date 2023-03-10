<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\OurTeam $model */

$this->title = $model->idour_team;
$this->params['breadcrumbs'][] = ['label' => 'Our Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="our-team-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idour_team' => $model->idour_team], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idour_team' => $model->idour_team], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idour_team',
            'nome1',
            'cargo1',
            'url_img1:url',
            'url_facebook1:url',
            'url_twitter1:url',
            'url_instagram1:url',
            'nome2',
            'cargo2',
            'url_img2:url',
            'url_facebook2:url',
            'url_twitter2:url',
            'url_instagram2:url',
            'nome3',
            'cargo3',
            'url_img3:url',
            'url_facebook3:url',
            'url_twitter3:url',
            'url_instagram3:url',
            'nome4',
            'cargo4',
            'url_img4:url',
            'url_facebook4:url',
            'url_twitter4:url',
            'url_instagram4:url',
        ],
    ]) ?>

</div>
