<?php

use app\models\Testimonial;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TestimonialSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Testimonials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonial-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Testimonial', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtestimonial',
            'nome',
            'profissao',
            'comentario:ntext',
            'url_img:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Testimonial $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idtestimonial' => $model->idtestimonial]);
                 }
            ],
        ],
    ]); ?>


</div>
