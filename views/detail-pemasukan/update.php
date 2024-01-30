<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetailPemasukan $model */

$this->title = 'Update Detail Pemasukan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Detail Pemasukans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-pemasukan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
