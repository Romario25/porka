<?php

use yii\db\Schema;
use yii\db\Migration;

class m160124_133811_add_column_publish extends Migration
{
    public function up()
    {
        $this->addColumn('photo_catalog', 'publish', $this->integer(1)->defaultValue(0));
        $this->addColumn('video', 'publish', $this->integer(1)->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('photo_catalog', 'publish');
        $this->dropColumn('video', 'publish');
    }


}
