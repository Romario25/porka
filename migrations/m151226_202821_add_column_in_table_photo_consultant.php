<?php

use yii\db\Schema;
use yii\db\Migration;

class m151226_202821_add_column_in_table_photo_consultant extends Migration
{
    public function up()
    {
        $this->addColumn('photo_catalog', 'url', $this->string()->notNull());
    }

    public function down()
    {
        $this->dropColumn('photo_catalog', 'url');
    }


}
