<?php

/* @var $this yii\web\View */
/* @var $model app\models\Form */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$this->title = 'Главная';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Текст о сайте!</h1>

        <p class="lead">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
    </div>

    <div class="jumbotron">
        <h1>Стоимость фоток!</h1>

        <p class="lead">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
    </div>

    <div class="form-for-parents">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput() ?>

        <?= $form->field($model, 'phone')->textInput() ?>

        <?= $form->field($model, 'school')->textInput() ?>

        <?= $form->field($model, 'class')->textInput() ?>

        <?= $form->field($model, 'text')->textarea() ?>

        <?= Html::submitButton('Отправить', [
            'class' => 'btn btn-primary',
        ]) ?>

        <?php ActiveForm::end(); ?>

    </div>
</div>