<?php

use yii\db\Schema;
use yii\db\Migration;

class m151223_194740_create_table_video extends Migration
{
    public function up()
    {
        $this->createTable('video', [
            'id' => $this->primaryKey(11),
            'create_at' => $this->date()->notNull(),
            'update_at' => $this->date()->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'object_url' => $this->string(255),
            'preview_url' => $this->string(255),
            'category_id' => $this->integer(11)
        ]);

        $this->createIndex("i_video_title", 'video', 'title');
        $this->addForeignKey('f_video_category', 'video', 'category_id', 'category', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('video');
    }

}
