<?php

use yii\db\Schema;
use yii\db\Migration;

class m151223_112411_add_column_in extends Migration
{
    public function up()
    {
        $this->addColumn("category", "show_expand", $this->boolean()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('category', 'show_expand');
    }

}
