<?php

use yii\db\Schema;
use yii\db\Migration;

class m160130_095429_add_column_in_table_photos extends Migration
{
    public function up()
    {
        $this->addColumn("photos", "sort", $this->integer(11));
    }

    public function down()
    {
        $this->dropColumn("photos", 'sort');
    }


}
