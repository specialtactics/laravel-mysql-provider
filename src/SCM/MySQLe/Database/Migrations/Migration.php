<?php namespace SCM\MySQLe\Database\Migrations;

use Illuminate\Database\Migrations\Migration as IMigration;

class Migration extends IMigration {

    /**
     * @param $tableName
     * @param $fieldName
     */
    public function createDateTimeTrigger($tableName, $fieldName) {
        DB::raw('DELIMITER $$');
        DB::statement('DROP TRIGGER IF EXISTS `%s_BINS`', array($tableName));
        DB::statement('CREATE TRIGGER `%s_BINS` BEFORE INSERT ON `%s` FOR EACH ROW SET NEW.`%s` = NOW()', array($tableName, $tableName, $fieldName));
        DB::raw('DELIMITER ;');
    }

}