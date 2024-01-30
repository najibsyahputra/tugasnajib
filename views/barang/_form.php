<?php

use app\models\Kategori;
use app\models\Barang;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Barang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $array = Kategori::find()->all(); ?>
    <?= $form->field($model, 'kategori_id')->dropDownList(ArrayHelper::map($array, 'id_kategori', 'kode_kategori')) ?>
 
    <?= $form->field($model, 'nama_barang')->dropDownList([
    'Kopi liberica' => 'Kopi liberica',
    'Kopi  robusta' => 'Kopi  robusta',
    'Kopi arabica' => 'Kopi arabica',
    'Kopi blen' => 'Kopi blen',
], ['prompt'=>'Silahkan pilih jenis kopi', 'onchange' => 'run()']) ?>

    <?= $form->field($model, 'merk_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ukuran_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_bercode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
