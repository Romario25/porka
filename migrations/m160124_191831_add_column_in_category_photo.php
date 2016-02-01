<?php

use yii\db\Schema;
use yii\db\Migration;

class m160124_191831_add_column_in_category_photo extends Migration
{
    public function up()
    {
        $this->addColumn('category_photo', 'title', $this->string(255));
    }

    public function down()
    {
       $this->dropColumn('category_photo', 'title');
    }


}
