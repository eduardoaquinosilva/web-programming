<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Testimonial $model */

$this->title = $model->idtestimonial;
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="testimonial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idtestimonial' => $model->idtestimonial], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idtestimonial' => $model->idtestimonial], [
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
            'idtestimonial',
            'nome',
            'profissao',
            'comentario:ntext',
            'url_img:url',
        ],
    ]) ?>

</div>
