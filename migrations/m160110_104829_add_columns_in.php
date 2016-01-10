<?php

use yii\db\Schema;
use yii\db\Migration;

class m160110_104829_add_columns_in extends Migration
{
    public function up()
    {
        $this->addColumn('category', 'meta_title', $this->string(255));
        $this->addColumn('category', 'meta_keywords', $this->string(255));
        $this->addColumn('category', 'meta_description', $this->string(255));
        $this->addColumn('video', 'meta_title', $this->string(255));
        $this->addColumn('video', 'meta_keywords', $this->string(255));
        $this->addColumn('video', 'meta_description', $this->string(255));
        $this->addColumn('photo_catalog', 'meta_title', $this->string(255));
        $this->addColumn('photo_catalog', 'meta_keywords', $this->string(255));
        $this->addColumn('photo_catalog', 'meta_description', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('category', 'meta_title');
        $this->dropColumn('category', 'meta_keywords');
        $this->dropColumn('category', 'meta_description');
        $this->dropColumn('video', 'meta_title');
        $this->dropColumn('video', 'meta_keywords');
        $this->dropColumn('video', 'meta_description');
        $this->dropColumn('photo_catalog', 'meta_title');
        $this->dropColumn('photo_catalog', 'meta_keywords');
        $this->dropColumn('photo_catalog', 'meta_description');
    }

}
