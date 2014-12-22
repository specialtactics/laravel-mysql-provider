<?php namespace SCM\MySQLe\Database\Migrations;

class Migration extends \Illuminate\Database\Migrations\Migration {

    /**
     * @param $tableName
     * @param $fieldName
     */
    public function createDateTimeTrigger($tableName, $fieldName) {
        \DB::unprepared(sprintf('
            CREATE TRIGGER `%s_BINS` BEFORE INSERT ON `%s` FOR EACH ROW
            BEGIN
            SET NEW.`%s` = NOW();
            END
        ', $tableName, $tableName, $fieldName));
    }

}
