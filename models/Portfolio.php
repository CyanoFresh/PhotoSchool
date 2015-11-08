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
 */
class Portfolio extends ActiveRecord
{
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
            [['caption', 'alt', 'description'], 'string']
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
        ];
    }
}
