<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetilPenjualan $model */

$this->title = 'Create Detil Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Detil Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detil-penjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
