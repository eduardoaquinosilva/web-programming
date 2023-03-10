<?php

use app\models\Appointment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AppointmentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Appointments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Appointment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idappointment',
            'nome',
            'email:email',
            'tipo_curso',
            'tipo_carro',
            //'menssagem:ntext',
            //'data_hora',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Appointment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idappointment' => $model->idappointment]);
                 }
            ],
        ],
    ]); ?>


</div>
