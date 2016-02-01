<?php

use yii\db\Schema;
use yii\db\Migration;

class m160124_134353_change_column extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `porno`.`category` CHANGE COLUMN `description` `description` TEXT NULL DEFAULT NULL';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m160124_134353_change_column cannot be reverted.\n";

        return false;
    }


}
