<?php

use yii\db\Migration;

class m151122_113834_form_add_city extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->addColumn('{{%form}}', 'city', 'VARCHAR(255) AFTER `id`');
    }

    public function safeDown()
    {
        $this->dropColumn('{{%form}}', 'city');
    }
}
