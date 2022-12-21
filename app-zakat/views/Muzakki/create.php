<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Muzakki $model */

$this->title = 'Create Muzakki';
$this->params['breadcrumbs'][] = ['label' => 'Muzakkis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muzakki-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
