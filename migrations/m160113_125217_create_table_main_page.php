<?php

use yii\db\Schema;
use yii\db\Migration;

class m160113_125217_create_table_main_page extends Migration
{
    public function up()
    {
        $this->createTable('main_page', [
            'id' => $this->primaryKey(11),
            'title_video' => $this->string(255)->notNull(),
            'description_video' => $this->text()->notNull(),
            'title_photo' => $this->string(255)->notNull(),
            'description_photo' => $this->text()->notNull(),
            'meta_title' => $this->string(255),
            'meta_keywords' => $this->string(255),
            'meta_description' => $this->string(255),
        ]);
    }

    public function down()
    {
        $this->dropTable('main_page');
    }


}
