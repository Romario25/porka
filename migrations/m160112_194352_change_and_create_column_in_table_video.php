<?php

use yii\db\Schema;
use yii\db\Migration;

class m160112_194352_change_and_create_column_in_table_video extends Migration
{
    public function up()
    {
        $this->dropColumn('video', 'object_url');
        $this->addColumn('video', 'object_url_0', $this->string(255));
        $this->addColumn('video', 'object_url_1', $this->string(255));
        $this->addColumn('video', 'object_url_2', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('video', 'object_url_0');
        $this->dropColumn('video', 'object_url_1');
        $this->dropColumn('video', 'object_url_2');
        $this->addColumn('video', 'object_url', $this->string(255));
    }


}
