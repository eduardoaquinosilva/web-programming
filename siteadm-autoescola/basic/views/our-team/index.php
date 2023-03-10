<?php

use app\models\OurTeam;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\OurTeamSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Our Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-team-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Our Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idour_team',
            'nome1',
            'cargo1',
            'url_img1:url',
            'url_facebook1:url',
            //'url_twitter1:url',
            //'url_instagram1:url',
            //'nome2',
            //'cargo2',
            //'url_img2:url',
            //'url_facebook2:url',
            //'url_twitter2:url',
            //'url_instagram2:url',
            //'nome3',
            //'cargo3',
            //'url_img3:url',
            //'url_facebook3:url',
            //'url_twitter3:url',
            //'url_instagram3:url',
            //'nome4',
            //'cargo4',
            //'url_img4:url',
            //'url_facebook4:url',
            //'url_twitter4:url',
            //'url_instagram4:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OurTeam $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idour_team' => $model->idour_team]);
                 }
            ],
        ],
    ]); ?>


</div>
