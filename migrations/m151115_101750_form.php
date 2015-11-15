<?php

use yii\db\Schema;
use yii\db\Migration;

class m151115_101750_form extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%form}}', [
            'id' => 'pk',
            'name' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_STRING,
            'school' => Schema::TYPE_STRING,
            'class' => Schema::TYPE_STRING,
            'text' => Schema::TYPE_TEXT,
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%form}}');
    }
}
