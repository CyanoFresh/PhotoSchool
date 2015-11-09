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
        <h1>Текст о сайте!</h1>

        <p class="lead">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt.</p>
    </div>

    <div class="jumbotron">
        <h1>Стоимость фоток!</h1>

        <p class="lead">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt./p>
    </div>

    <div class="form-for-parents">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'name')->textInput() ?>

        <?= $form->field($model, 'phone')->textInput() ?>

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
                'browseClass' => 'btn btn-primary btn-block btn-half',
                'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                'browseLabel' =>  'Выбрать фото...'
            ],
        ]) ?>

        <?= Html::submitButton('Отправить', [
            'class' => 'btn btn-primary',
        ]) ?>

        <?php ActiveForm::end(); ?>

    </div>
</div>
