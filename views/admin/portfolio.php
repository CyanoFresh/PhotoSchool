<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Портфолио - Админ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-portfolio">

    <h1 class="page-header">
        <?= Html::encode($this->title) ?>
        <?= Html::a('+', ['create'], ['class' => 'btn btn-success']) ?>
    </h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summaryOptions' => ['class' => 'alert alert-info'],
        'columns' => [
            'id',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($model) {
                    /** @var $model app\models\Portfolio */
                    return Html::img(Yii::getAlias('@web/portfolio/' . $model->id . '.jpg'), [
                        'width' => '100px'
                    ]);
                }
            ],
            'caption',
            'alt',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
