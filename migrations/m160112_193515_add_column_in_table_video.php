<?php

use yii\db\Schema;
use yii\db\Migration;

class m160112_193515_add_column_in_table_video extends Migration
{
    public function up()
    {
        $this->addColumn('video', 'storage', $this->integer(1)->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('video', 'storage');
    }

}
