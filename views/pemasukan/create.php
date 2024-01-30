<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pemasukan $model */

$this->title = 'Create Pemasukan';
$this->params['breadcrumbs'][] = ['label' => 'Pemasukans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasukan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
