<?php

use yii\db\Schema;
use yii\db\Migration;

class m160117_121603_add_column_in_photo_catalog extends Migration
{
    public function up()
    {
        $this->addColumn('photo_catalog', 'alt', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('photo_catalog', 'alt');
    }


}
