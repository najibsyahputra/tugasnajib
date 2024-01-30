<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DetailPemasukan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-pemasukan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_barang')->textInput() ?>

    <?= $form->field($model, 'id_pemasukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok_masuk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
