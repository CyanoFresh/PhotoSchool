<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user_images}}".
 *
 * @property integer $id
 * @property string $basename
 * @property string $extension
 */
class UserImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_images}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['basename', 'extension'], 'required'],
            [['basename'], 'string', 'max' => 255],
            [['extension'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'basename' => 'Basename',
            'extension' => 'Extension',
        ];
    }
}
