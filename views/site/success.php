<?php

/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = 'Success';
?>
<div class="site-success">
    <div class="alert alert-success">
        Вы успешно заполнили форму. Мы с вами свяжемся
    </div>

    <a href="<?= \yii\helpers\Url::to('') ?>" class="btn btn-lg btn-primary">
        На главную
    </a>
</div>
