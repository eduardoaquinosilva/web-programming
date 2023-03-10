<?php

/** @var yii\web\View $this */
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use backend\models\Contatos;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4">Contatos</h1>
            
        </div>
    </div>

    <div class="body-content">

        <div class="row">
          <?php


$dataProvider = new ActiveDataProvider([
    'query' => Contatos::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_contato',
]);
          ?>
        </div>
    </div>
</div>
        