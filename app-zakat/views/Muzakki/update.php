<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Muzakki $model */

$this->title = 'Update Muzakki: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Muzakkis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="muzakki-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
