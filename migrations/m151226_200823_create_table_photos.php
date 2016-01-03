<?php

use yii\db\Schema;
use yii\db\Migration;

class m151226_200823_create_table_photos extends Migration
{
    public function up()
    {
        $this->createTable("photos", [
            'id' => $this->primaryKey(11),
            'catalog_id' => $this->integer(11),
            'url' => $this->string(255)
        ]);

        $this->addForeignKey('f_photos', 'photos', 'catalog_id', 'photo_catalog', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable("photos");
    }


}
