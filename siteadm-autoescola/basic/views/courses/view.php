<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Courses $model */

$this->title = $model->idcourses;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="courses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idcourses' => $model->idcourses], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idcourses' => $model->idcourses], [
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
            'idcourses',
            'preco1',
            'desc1',
            'nivel1',
            'duracao1',
            'preco2',
            'desc2',
            'nivel2',
            'duracao2',
            'preco3',
            'desc3',
            'nivel3',
            'duracao3',
        ],
    ]) ?>

</div>
