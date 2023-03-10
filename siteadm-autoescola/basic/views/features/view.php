<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Features $model */

$this->title = $model->idfeatures;
$this->params['breadcrumbs'][] = ['label' => 'Features', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="features-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idfeatures' => $model->idfeatures], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idfeatures' => $model->idfeatures], [
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
            'idfeatures',
            'titulo',
            'subtitulo',
            'desc1',
            'desc2',
            'desc3',
            'desc4',
        ],
    ]) ?>

</div>
