<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Appointment $model */

$this->title = $model->idappointment;
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="appointment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idappointment' => $model->idappointment], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idappointment' => $model->idappointment], [
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
            'idappointment',
            'nome',
            'email:email',
            'tipo_curso',
            'tipo_carro',
            'menssagem:ntext',
            'data_hora',
        ],
    ]) ?>

</div>
