<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Портфолио';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile('@web/css/grid.css');
$this->registerJsFile('@web/js/grid.js', [
    'depends' => [
        'yii\web\JqueryAsset',
        'app\assets\ModernizrAsset'
    ],
]);
$this->registerJs('$(function(){Grid.init()})');
?>
<div class="site-portfolio">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul id="og-grid" class="og-grid">
        <?php foreach ($model->find()->all() as $item): ?>
            <li>
                <a href="#" data-largesrc="<?= Yii::getAlias('@web/uploads/portfolio/' . $item->id . '.jpg') ?>"
                   data-title="<?= $item->caption ?>" data-description="<?= $item->description ?>">
                    <img src="<?= Yii::getAlias('@web/uploads/portfolio/' . $item->id . '.jpg') ?>" style="max-height: 200px;"
                         alt="<?= $item->alt ?>">
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
