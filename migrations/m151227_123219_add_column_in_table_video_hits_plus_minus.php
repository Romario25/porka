<?php

use yii\db\Schema;
use yii\db\Migration;

class m151227_123219_add_column_in_table_video_hits_plus_minus extends Migration
{
    public function up()
    {
        $this->addColumn('video', 'hits', $this->integer(11)->defaultValue(0));
        $this->addColumn('video', 'plus', $this->integer(11)->defaultValue(0));
        $this->addColumn('video', 'minus', $this->integer(11)->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('video', 'hits');
        $this->dropColumn('video', 'plus');
        $this->dropColumn('video', 'minus');
    }


}
