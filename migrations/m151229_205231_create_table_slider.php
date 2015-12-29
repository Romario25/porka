<?php

use yii\db\Schema;
use yii\db\Migration;

class m151229_205231_create_table_slider extends Migration
{
    public function up()
    {
        $this->createTable('slider', [
           'id' => $this->primaryKey(11),
            'title' => $this->string(255)->notNull(),
            'src' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('slider');
    }


}
