<?php

use yii\db\Schema;
use yii\db\Migration;

class m160115_121405_create_table_category_photo extends Migration
{
    public function up()
    {
        $this->createTable("category_photo", [
           'id' => $this->primaryKey(11),
            'name' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull(),
            'show_expand' => $this->smallInteger(1)->defaultValue(0),
            'description' =>$this->text(),
            'meta_title' => $this->string(255),
            'meta_keywords' => $this->string(255),
            'meta_description' => $this->string(255)
        ]);
    }

    public function down()
    {
        $this->dropTable('category_photo');
    }


}
