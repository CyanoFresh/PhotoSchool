<?php

namespace app\components;

use kartik\icons\Icon;
use Yii;
use yii\grid\ActionColumn;
use yii\helpers\Html;

/**
 * ActionButtonGroupColumn is a ActionColumn for the [[GridView]] widget that displays buttons for viewing and manipulating the items
 * grouped into div.btn-group
 *
 * To add an ActionButtonGroupColumn to the gridview, add it to the [[GridView::columns|columns]] configuration as follows:
 *
 * ```php
 * 'columns' => [
 *     // ...
 *     [
 *         'class' => ActionButtonGroupColumn::className(),
 *         // you may configure additional properties here
 *     ],
 * ]
 * ```
 *
 * @author Alex Solomaha <cyanofresh@gmail.com>
 */
class ActionButtonGroupColumn extends ActionColumn
{
    protected function initDefaultButtons()
    {
        $this->template = '<div class="btn-group">' . $this->template . '</div>';

        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                return Html::a(Icon::show('eye'), $url, array_merge([
                    'title' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                    'class' => 'btn btn-success btn-xs',
                ], $this->buttonOptions));
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                return Html::a(Icon::show('edit'), $url, array_merge([
                    'title' => Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                    'class' => 'btn btn-primary btn-xs',
                ], $this->buttonOptions));
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                return Html::a(Icon::show('trash'), $url, array_merge([
                    'title' => Yii::t('yii', 'Delete'),
                    'class' => 'btn btn-danger btn-xs',
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ], $this->buttonOptions));
            };
        }
    }
}