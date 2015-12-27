<?php

use yii\db\Schema;
use yii\db\Migration;

class m151227_122142_add_column_in_table_category extends Migration
{
    public function up()
    {
        $this->addColumn('category', 'description', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('category', 'description');
    }


}
