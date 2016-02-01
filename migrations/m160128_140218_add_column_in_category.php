<?php

use yii\db\Schema;
use yii\db\Migration;

class m160128_140218_add_column_in_category extends Migration
{
    public function up()
    {
        $this->addColumn('category', 'sort', $this->integer(3)->defaultValue(0));
        $this->addColumn('category_photo', 'sort', $this->integer(3)->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('category', 'sort');
        $this->dropColumn('category_photo', 'sort');
    }

}
