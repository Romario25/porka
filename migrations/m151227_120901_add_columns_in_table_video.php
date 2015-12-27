<?php

use yii\db\Schema;
use yii\db\Migration;

class m151227_120901_add_columns_in_table_video extends Migration
{
    public function up()
    {
        $this->addColumn('video', 'duration', $this->string(255)->notNull());
        $this->addColumn('video', 'actor', $this->string(255)->notNull());
    }

    public function down()
    {
        $this->dropColumn('video', 'duration');
        $this->dropColumn('video', 'actor');
    }


}
