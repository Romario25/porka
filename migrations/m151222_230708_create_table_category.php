<?php

use yii\db\Schema;
use yii\db\Migration;

class m151222_230708_create_table_category extends Migration
{
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }


}
