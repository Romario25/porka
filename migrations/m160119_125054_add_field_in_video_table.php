<?php

use yii\db\Schema;
use yii\db\Migration;

class m160119_125054_add_field_in_video_table extends Migration
{
    public function up()
    {
        $this->addColumn('video', 'alt', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('video', 'alt');
    }


}
