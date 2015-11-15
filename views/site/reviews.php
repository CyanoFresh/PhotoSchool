<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-portfolio">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <?php foreach ($model->find()->all() as $item): ?>
        <blockquote <?= ($item->id % 2 == 0) ? 'class="blockquote-reverse"'  : null ?>>
            <p><?= $item->text ?></p>
            <footer><?= $item->name ?></footer>
        </blockquote>
    <?php endforeach ?>
</div>
