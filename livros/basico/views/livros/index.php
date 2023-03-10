<?php

use app\models\Livros;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LivrosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Livros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="livros-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Livros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nome',
            'autor',
            'quantidade',
            'preco',
            'flag',
            //'data',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Livros $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nome' => $model->nome]);
                 }
            ],
        ],
    ]); ?>


</div>
