<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sells';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sell-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sell', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            'area',
            'material',
            'cost',
            [
                'attribute' => 'image',
                'value' => function($model){
                    if($model->image)
                        return Html::img('@web'.'/'.$model->image, ['width' => 45, 'height' => 45 ,'class'=>'center-block' ]);
                    else
                        return Html::img('@web/uploads/nophoto.png', ['width' => 45, 'height' => 45]);
                },
                'format' => 'raw',
            ],
            //'address',
            //'quality',
            //'rooms',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
