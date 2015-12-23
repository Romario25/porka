<?php

use yii\db\Schema;
use yii\db\Migration;

class m151223_194729_create_table_config extends Migration
{
    public function up()
    {
        $this->createTable('config', [
           'id' => $this->primaryKey(11),
            'name' => $this->string(255),
            'value' => $this->string(255)
        ]);
    }

    public function down()
    {
        $this->dropTable('config');
    }


}
