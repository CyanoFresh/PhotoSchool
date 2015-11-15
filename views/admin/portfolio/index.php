<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PortfolioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Портфолио';
$this->params['breadcrumbs'][] = ['label' => 'Админпанель'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summaryOptions' => ['class' => 'alert alert-info'],
        'columns' => [
            'id',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($model) {
                    /** @var $model app\models\Portfolio */
                    return Html::img(Yii::getAlias('@web/portfolio/' . $model->id . '.jpg'), [
                        'height' => '100px',
                    ]);
                },
            ],
            'caption:ntext',
            'alt:ntext',
            'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
