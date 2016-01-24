<?php

use yii\db\Schema;
use yii\db\Migration;

class m160103_110351_create_table_ads extends Migration
{
    public function up()
    {
        $this->createTable('ads', [
            'id' => $this->primaryKey(11),
            'title' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull(),
            'code' => $this->text()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('ads');
    }


}
