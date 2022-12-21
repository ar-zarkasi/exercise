<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ZakatTransaction $model */

$this->title = 'Create Zakat Transaction';
$this->params['breadcrumbs'][] = ['label' => 'Zakat Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakat-transaction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'opsi' => $opsi,
    ]) ?>

</div>
