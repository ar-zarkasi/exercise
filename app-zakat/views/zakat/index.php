<?php

use app\models\ZakatTransaction;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Zakat Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakat-transaction-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Zakat Transaction', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode_transaksi',
            'id_muzakki',
            'tanggal',
            'pay_beras',
            //'pay',
            //'jumlah',
            //'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ZakatTransaction $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
