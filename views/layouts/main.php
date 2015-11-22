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
                    ['label' => 'Анкеты', 'url' => ['/admin/form']],
                    ['label' => 'Отзывы', 'url' => ['/admin/reviews']],
                    ['label' => 'Портфолио', 'url' => ['/admin/portfolio']],
                    '<li class="divider"></li>',
                    [
                        'label' => 'Выйти',
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
            <div class="col-sm-5">
                <h3>Контакты фотографа</h3>

                <p>Алена</p>

                <p><a href="http://fotoboom.net">fotoboom.net</a></p>

                <p><a href="https://vk.com/alikosinka">Vkontakte</a></p>
				<p><a href="https://www.facebook.com/fotoboooooom/">Facebook group</a></p>
            </div>
			<div class="col-sm-5">
                <h3>Контакты студии</h3>

                <p>Натали</p>

                <p><a href="https://vk.com/id320244034">Vkontakte</a></p>
				<p><a href="https://vk.com/fotosweetdream">Vkontakte group</a></p>
				<p><a href="https://www.facebook.com/groups/1613728125581846/">Facebook group</a></p>
            </div>
            <div class="col-sm-2">
                <h3>Телефоны</h3>

                <p>+38068 710 85 59 Алена фотограф</p>
				
				<p>+38093 949 42 03 Натали студия</p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
