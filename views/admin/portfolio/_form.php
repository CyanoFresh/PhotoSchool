<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Portfolio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portfolio-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'class' => 'col-md-6',
            'enctype' => 'multipart/form-data',
        ],
    ]); ?>

    <?= $form->field($model, 'caption')->textInput() ?>

    <?= $form->field($model, 'image')->widget(FileInput::className(), [
        'options' => [
            'accept' => 'image/*',
        ],
        'pluginOptions' => [
            'showUpload' => false,
            'showCaption' => false,
            'removeClass' => 'btn btn-danger btn-block',
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' =>  'Нажмите, чтобы выбрать фото'
        ],
    ]) ?>

    <?= $form->field($model, 'alt')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
