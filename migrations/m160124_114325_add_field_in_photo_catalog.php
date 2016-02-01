<?php

use yii\db\Schema;
use yii\db\Migration;

class m160124_114325_add_field_in_photo_catalog extends Migration
{
    public function up()
    {
        $this->addColumn("photo_catalog", "photo_preview", $this->string(255));
    }

    public function down()
    {
        $this->dropColumn("photo_catalog", "photo_preview");
    }
}
