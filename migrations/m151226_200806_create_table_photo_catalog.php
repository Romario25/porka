<?php

use yii\db\Schema;
use yii\db\Migration;

class m151226_200806_create_table_photo_catalog extends Migration
{
    public function up()
    {
        $this->createTable("photo_catalog", [
            'id' => $this->primaryKey(11),
            'title' => $this->string(255),
            'category_id' => $this->integer(11),
            'create_at' => $this->date(),
            'update_at' => $this->date(),
            'description' => $this->text(),
            'plus' => $this->integer(11),
            'minus' => $this->integer(11),
            'hits' => $this->integer(11)
        ]);

        $this->createIndex("i_photo_title", 'photo_catalog', 'title');
        $this->addForeignKey('f_photo_catalog', 'photo_catalog', 'category_id', 'category', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable("photo_catalog");
    }


}
