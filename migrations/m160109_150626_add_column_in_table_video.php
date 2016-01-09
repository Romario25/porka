<?php

use yii\db\Schema;
use yii\db\Migration;

class m160109_150626_add_column_in_table_video extends Migration
{
    public function up()
    {
        $this->addColumn('video', 'screenshot', $this->string(255)->notNull());
    }

    public function down()
    {
       $this->dropColumn('video', 'screenshot');
    }


}
