<?php

/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = 'Вы успешно заполнили анкету';
?>
<div class="site-success">
    <div class="alert alert-success">
        Вы успешно заполнили анкету. Мы с Вами свяжемся
    </div>

    <a href="<?= \yii\helpers\Url::to('') ?>" class="btn btn-lg btn-primary">
        На главную
    </a>
</div>
