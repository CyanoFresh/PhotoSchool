<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title ?> - <?= Yii::$app->name ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Портфолио', 'url' => ['/site/portfolio']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => 'Отзывы', 'url' => ['/site/reviews']],
            ['label' => 'Фотостудия', 'url' => ['/site/studio']],
            Yii::$app->user->identity ? [
                'label' => Yii::$app->user->identity->username,
                'items' => [
                    ['label' => 'Отзывы', 'url' => ['/admin/reviews']],
                    ['label' => 'Портфолио', 'url' => ['/admin/portfolio']],
                    '<li class="divider"></li>',
                    [
                        'label' => 'Logout',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post'],
                    ],
                ],
            ] : '',
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3>Контакты</h3>

                <p>Фотограф - Соломаха Алена</p>

                <p>сайт - fotoboom.net</p>

                <p>vk - vk.com</p>
            </div>
            <div class="col-sm-4">
                <h3>Телефон</h3>

                <p>+38093485738745</p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
