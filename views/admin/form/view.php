<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Админпанель'];
$this->params['breadcrumbs'][] = ['label' => 'Анкеты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$images = null;

foreach (\app\models\UserImages::find()->all() as $item) {
    $images .= Html::img(Yii::getAlias('@web/user_images/' . md5($item->id) . '.' . $item->extension), [
//        'height' => 300,
        'class' => 'img-thumbnail',
    ]);
}
?>
<div class="form-view">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
            'school',
            'class',
            'text:ntext',
            [
                'attribute' => 'images',
                'format' => 'html',
                'value' => $images,
            ]
        ],
    ]) ?>

</div>
