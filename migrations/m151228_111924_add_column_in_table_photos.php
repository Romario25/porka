<?php

use yii\db\Schema;
use yii\db\Migration;

class m151228_111924_add_column_in_table_photos extends Migration
{
    public function up()
    {
        $this->addColumn('photos', 'url_thumbnail', $this->string(255)->notNull());
    }

    public function down()
    {
        $this->dropColumn('photos', 'url_thumbnail');
    }


}
