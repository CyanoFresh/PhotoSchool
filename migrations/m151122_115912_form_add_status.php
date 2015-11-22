<?php

use yii\db\Schema;
use yii\db\Migration;

class m151122_115912_form_add_status extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%form}}', 'status', 'VARCHAR(255) AFTER `id`');
    }

    public function safeDown()
    {
        $this->dropColumn('{{%form}}', 'status');
    }
}
