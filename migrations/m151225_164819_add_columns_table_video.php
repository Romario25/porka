<?php

use yii\db\Schema;
use yii\db\Migration;

class m151225_164819_add_columns_table_video extends Migration
{
    public function up()
    {
        $this->createTable('video_screens', [
           'id' => $this->primaryKey(11),
            'video_id' => $this->integer(11),
            'screen_url' => $this->string(255)
        ]);

        $this->addForeignKey('f_video_screens', 'video_screens', 'video_id', 'video', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('video_screens');
    }


}
