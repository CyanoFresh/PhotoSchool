<?php

use yii\db\Schema;
use yii\db\Migration;

class m151115_101814_user_images extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_images}}', [
            'id' => 'pk',
            'basename' => Schema::TYPE_STRING,
            'extension' => Schema::TYPE_STRING,
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user_images}}');
    }
}
