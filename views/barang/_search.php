<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\search\BarangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="barang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kategori_id') ?>

    <?= $form->field($model, 'nama_barang') ?>

    <?= $form->field($model, 'merk_barang') ?>

    <?= $form->field($model, 'ukuran_barang') ?>

    <?php // echo $form->field($model, 'kode_bercode') ?>

    <?php // echo $form->field($model, 'stok') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
