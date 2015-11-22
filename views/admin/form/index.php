<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Анкеты';
$this->params['breadcrumbs'][] = ['label' => 'Админпанель'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-index">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summaryOptions' => ['class' => 'alert alert-info'],
        'rowOptions' => function ($model) {
            /** @var $model app\models\Form */
            if ($model->status == 'new') {
                return ['class' => 'success'];
            } elseif ($model->status === 'viewed') {
                return ['class' => 'active'];
            }

            return ['class' => 'active'];
        },
        'columns' => [
            'id',
            'name',
            'phone',
            'city',
            'school',
            'class',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
