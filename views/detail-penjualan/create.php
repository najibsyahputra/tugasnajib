<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetailPenjualan $model */

$this->title = 'Create Detail Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Detail Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-penjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
