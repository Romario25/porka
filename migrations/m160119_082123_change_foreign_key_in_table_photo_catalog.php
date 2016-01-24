<?php

use yii\db\Schema;
use yii\db\Migration;

class m160119_082123_change_foreign_key_in_table_photo_catalog extends Migration
{
    public function up()
    {
        $this->dropForeignKey("f_photo_catalog", 'photo_catalog');
        $this->addForeignKey('f_photo_catalog', 'photo_catalog', 'category_id', 'category_photo', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m160119_082123_change_foreign_key_in_table_photo_catalog cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
