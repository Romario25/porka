<?php

use yii\db\Schema;
use yii\db\Migration;

class m160112_191353_add_column_in_table_photo_catalog extends Migration
{
    public function up()
    {
        $this->addColumn('photo_catalog', "storage", $this->integer(1)->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('photo_catalog', 'storage');
    }


}
