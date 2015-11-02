<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%form}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $school
 * @property string $class
 * @property string $text
 */
class Form extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%form}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'class', 'school', 'text'], 'required'],
            [['text'], 'string'],
            [['name', 'phone', 'class', 'school'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'class' => 'Класс',
            'school' => 'Школа',
            'text' => 'Сообщение',
            'photo' => 'Похожие фото',
        ];
    }
}
