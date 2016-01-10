<?php

use yii\db\Schema;
use yii\db\Migration;

class m160110_120733_create_table_pages extends Migration
{
    public function up()
    {
        $this->createTable('pages', [
           'id' => $this->primaryKey(11),
            'title' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'meta_title' => $this->string(255),
            'meta_keywords' => $this->string(255),
            'meta_description' => $this->string(255),
        ]);
    }

    public function down()
    {
        $this->dropTable('pages');
    }


}
