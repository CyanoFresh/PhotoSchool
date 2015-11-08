<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%form}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $school
 * @property string $class
 * @property string $text
 * @property string $images
 */
class Form extends ActiveRecord
{
    /**
     * @var UploadedFile[]
     */
    public $images;

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
            [['name', 'phone', 'class', 'school'], 'string', 'max' => 255],
            [['text'], 'string'],
            [['images'], 'image', 'maxFiles' => 5, 'extensions' => 'png, jpg'],
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
            'images' => 'Похожие фото',
        ];
    }

    public function upload()
    {
        foreach ($this->images as $file) {
            // Working with DB
            $model = new UserImages();

            $model->basename = $file->baseName;
            $model->extension = $file->extension;

            $model->save();

            // Working with files
            $file->saveAs(Yii::getAlias('@webroot/user_images/') . md5($model->id) . '.' . $file->extension);
        }

        return true;
    }
}
