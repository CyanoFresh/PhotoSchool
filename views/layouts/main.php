<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$newFormsCount = \app\models\Form::find()->where(['status' => 'new'])->count();
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
        'encodeLabels' => false,
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Портфолио', 'url' => ['/site/portfolio']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => 'Отзывы', 'url' => ['/site/reviews']],
            Yii::$app->user->identity ? [
                'label' => Yii::$app->user->identity->username . ' <span class="badge">' . $newFormsCount . '</span>',
                'items' => [
                    ['label' => 'Анкеты <span class="badge">' . $newFormsCount . '</span>', 'url' => ['/admin/form']],
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
                <h4>Контакты фотографа</h4>

                <p>Алена</p>

                <p><a href="http://fotoboom.net">fotoboom.net</a></p>

                <p><a href="https://vk.com/alikosinka">Vkontakte</a></p>
				<p><a href="https://www.facebook.com/fotoboooooom/">Facebook group</a></p>
            </div>
            <div class="col-sm-2">
                <h4>Телефоны</h4>

                <p>+38068 710 85 59 Алена фотограф</p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-84824921-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
<?php $this->endPage() ?>
