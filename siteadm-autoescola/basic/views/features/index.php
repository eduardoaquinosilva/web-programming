<?php

use app\models\Features;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\FeaturesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Features';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="features-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Features', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idfeatures',
            'titulo',
            'subtitulo',
            'desc1',
            'desc2',
            //'desc3',
            //'desc4',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Features $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idfeatures' => $model->idfeatures]);
                 }
            ],
        ],
    ]); ?>


</div>
