<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetailPemasukan $model */

$this->title = 'Create Detail Pemasukan';
$this->params['breadcrumbs'][] = ['label' => 'Detail Pemasukans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-pemasukan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
