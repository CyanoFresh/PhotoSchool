<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%portfolio}}".
 *
 * @property integer $id
 * @property string $caption
 * @property string $alt
 * @property string $description
 * @property string $image
 */
class Portfolio extends ActiveRecord
{
    public $image;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%portfolio}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption'], 'required'],
            [['caption', 'alt', 'description'], 'string'],
            [['image'], 'image', 'extensions' => 'jpg,png'],
            [['image'], 'required', 'on' => 'create'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Название',
            'alt' => 'Alt',
            'description' => 'Описание',
            'image' => 'Фото',
        ];
    }
}
