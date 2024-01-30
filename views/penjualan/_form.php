<?php


use app\models\DetailPenjualan;
use app\models\Pegawai;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Penjualan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $Array = DetailPenjualan::find()->all(); ?>
      <?= $form->field($model,'id_penjualan')->dropDownList(ArrayHelper::map($Array, 'id_barang', 'id_penjualan')) ?>

    <?= $form->field($model, 'id_penjualan')->textInput(['maxlength' => true]) ?>

    <?php $Array = Pegawai::find()->all(); ?>
      <?= $form->field($model,'id_pegawai')->dropDownList(ArrayHelper::map($Array, 'id_pegawai', 'nama_pegawai')) ?>

    <?= $form->field($model, 'tgl_penjualan')->textInput() ?>

    <?= $form->field($model, 'total_harga_penjualan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
