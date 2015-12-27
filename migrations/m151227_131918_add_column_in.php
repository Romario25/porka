<?php

use yii\db\Schema;
use yii\db\Migration;

class m151227_131918_add_column_in extends Migration
{
    public function up()
    {
        $this->addColumn('photo_catalog', 'actor', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('photo_catalog', 'actor');
    }


}
