<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%user_images}}".
 *
 * @property integer $id
 * @property integer $form_id
 * @property string $basename
 * @property string $extension
 */
class UserImages extends ActiveRecord
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
            [['basename', 'extension', 'form_id'], 'required'],
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
            'form_id' => 'Form ID',
            'basename' => 'Basename',
            'extension' => 'Extension',
        ];
    }
}
