<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\About $model */

$this->title = $model->idabout;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="about-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idabout' => $model->idabout], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idabout' => $model->idabout], [
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
            'idabout',
            'titulo',
            'telefone',
            'texto1:ntext',
            'texto2:ntext',
        ],
    ]) ?>

</div>
