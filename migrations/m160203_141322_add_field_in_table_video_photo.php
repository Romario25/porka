<?php

use yii\db\Schema;
use yii\db\Migration;

class m160203_141322_add_field_in_table_video_photo extends Migration
{
    public function up()
    {
        $this->addColumn('photo_catalog', 'block_edit', $this->integer(1)->defaultValue(0));
        $this->addColumn('video', 'block_edit', $this->integer(1)->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('photo_catalog', 'block_edit');
        $this->dropColumn('video', 'block_edit');
    }


}
