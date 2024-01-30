<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DetailPenjualan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_barang')->textInput() ?>

    <?= $form->field($model, 'id_penjualan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_jual')->textInput() ?>

    <?= $form->field($model, 'sub_total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
