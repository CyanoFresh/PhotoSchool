<?php

/* @var $this yii\web\View */
/* @var $model app\models\Form */

use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$this->title = 'Главная';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Сайт создан для оформления заявки на создание красивых фото, выпускных альбомов, фотокниг</h1>

        <p class="lead">Также тут можно ознакомиться с нашими услугами: аренда фотостудии в Ирпене, фотограф, дизайнер.
            Работаем в таких городах, как Киев, Ирпень, Буча, Ворзель, Киевская
            область и т.д. Отдельно оговаривается любой другой город.</p>
        <p class="lead">Этапы работы при создании альбома:</br>
            1 - портретная фотосъемка для выпускного альбома с ретушью отснятых кадров (в студии либо в учебном заведении)</br>
            2 - отбор фото для альбома, которые проходят ретушь</br>
            3 - общая фотосъемка группами. Продолжительность съемки зависит от количества страниц в альбоме (2 - 4 часа). Съемка может проходить на природе, в учебном заведении</br>
            4 - оформление альбома</br>
            5 - утверждение макетов фотокниги</br>
            6 - печать выпускных альбомов</br>
            4 - доставка альбомов </p>
    </div>

    <div class="jumbotron">
        <h1>Ориентировочные цены:</h1>

        <div class="row">
            <div class="col-md-4">
                <p class="lead">Печать фото:</br>
                    10х15 см - 10 грн</br>
                    15х20 см - 17 грн</br>
                    20х30 см - 26 грн</br>
                    30х40 см - 40 грн</br>
                </p>
            </div>
            <div class="col-md-4">
                <p class="lead">Создание альбома на 24 страницы (кол-во старниц можно менять):</br>
                    20х15 см - 250 грн</br>
                    15х20 см - 250 грн</br>
                    20х20 см - 250 грн</br>
                    30х20 см - 300 грн</br>
                    20х30 см - 300 грн</br>
                    30х30 см - 400 грн</br>
                </p>
            </div>
            <div class="col-md-4">
                <p class="lead">Печать холстов:</br>
                    15x20 см - 200 грн</br>
                    20x30 см - 250 грн</br>
                    30x40 см - 270 грн</br>
                    30x45 см - 320 грн</br>
                    40x50 см - 350 грн</br>
                    40х60 см - 400 грн</br>
                    50х70 см - 460 грн</br>
                </p>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center">

            <h1>Заполните анкету, пожалуйста, если желаете, что б Вас или Вашего ребенка сфотографировали в
                учебном заведении, а также не забывайте указывать желаемую дату фотосъемки.
            </h1>

                    <hr>

            <div class="row text-left">
                <?php $form = ActiveForm::begin([
                    'options' => [
                        'class' => 'col-md-6 col-sm-6 col-sm-offset-3',
                        'enctype' => 'multipart/form-data',
                    ],
                ]); ?>

                <?= $form->field($model, 'name')->textInput() ?>

                <?= $form->field($model, 'phone')->textInput() ?>

                <?= $form->field($model, 'city')->textInput() ?>

                <?= $form->field($model, 'school')->textInput() ?>

                <?= $form->field($model, 'class')->textInput() ?>

                <?= $form->field($model, 'text')->textarea() ?>

                <?= $form->field($model, 'images[]')->widget(FileInput::className(), [
                    'options' => [
                        'accept' => 'image/*',
                        'multiple' => true,
                    ],
                    'pluginOptions' => [
                        'showUpload' => false,
                        'showCaption' => false,
                        'showRemove' => false,
                        'browseClass' => 'btn btn-primary btn-block',
                        'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                        'browseLabel' => 'Нажмите, чтобы выбрать фото'
                    ],
                ]) ?>

                <?= Html::submitButton('Отправить', [
                    'class' => 'btn btn-primary',
                ]) ?>

                <?php ActiveForm::end(); ?>
            </div>
    </div>
</div>
