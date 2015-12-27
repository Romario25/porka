<?php

use yii\db\Schema;
use yii\db\Migration;

class m151225_155213_add_column_table_video extends Migration
{
    public function up()
    {
        $this->addColumn('video', 'url', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('video', 'url');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
