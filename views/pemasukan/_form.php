<?php

use app\models\DetailPemasukan;
use app\models\Pemasukan;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pemasukan $model */
/** @var yii\widgets\ActiveForm $form */    
?>

<div class="pemasukan-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $array = DetailPemasukan::find()->all(); ?>
    <?= $form->field($model, 'id_pemasukan')->dropDownList(ArrayHelper::map($array, 'id_barang', 'id_pemasukan')) ?>

    <?= $form->field($model, 'tgl_pemasukan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
