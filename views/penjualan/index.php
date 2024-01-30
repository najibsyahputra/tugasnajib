<?php

use app\models\Penjualan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\search\PenjualanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penjualans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penjualan',
            'id_pegawai',
            'tgl_penjualan',
            'total_harga_penjualan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Penjualan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penjualan' => $model->id_penjualan]);
                 }
            ],
        ],
    ]); ?>


</div>
