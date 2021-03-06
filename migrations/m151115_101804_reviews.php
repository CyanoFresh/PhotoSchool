<?php

use yii\db\Schema;
use yii\db\Migration;

class m151115_101804_reviews extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%reviews}}', [
            'id' => 'pk',
            'name' => Schema::TYPE_STRING,
            'text' => Schema::TYPE_TEXT,
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%reviews}}');
    }
}
