<?php

use app\models\Pemasukan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\search\PemasukanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemasukans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasukan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemasukan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pemasukan',
            'tgl_pemasukan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pemasukan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pemasukan' => $model->id_pemasukan]);
                 }
            ],
        ],
    ]); ?>


</div>
