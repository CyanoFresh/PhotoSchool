<?php

use yii\db\Schema;
use yii\db\Migration;

class m151115_101758_portfolio extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%portfolio}}', [
            'id' => 'pk',
            'caption' => Schema::TYPE_STRING,
            'alt' => Schema::TYPE_TEXT,
            'description' => Schema::TYPE_TEXT,
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%portfolio}}');
    }
}
