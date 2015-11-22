<?php

use yii\db\Schema;
use yii\db\Migration;

class m151122_114801_user_images_add_formid extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%user_images}}', 'form_id', 'INT AFTER `id`');
    }

    public function safeDown()
    {
        $this->dropColumn('{{%user_images}}', 'form_id');
    }
}
