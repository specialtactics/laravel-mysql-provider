<?php namespace SCM\MySQLe\Database\Schema\Grammars;

use Illuminate\Support\Fluent;

class MysqlGrammar extends \Illuminate\Database\Schema\Grammars\MySqlGrammar {

    /**
     * Create the column definition for a varbinary type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeBinary(Fluent $column)
    {
        return "binary({$column->length})";
    }

    /**
     * Create an 'updated_at' timestamp
     *
     * @param Fluent $column
     * @return string
     */
    protected function typeUpdatedTimeStamp(Fluent $column) {
        $column['nullable'] = true;
        return "TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NULL DEFAULT NULL";
    }

    /**
     * Create a Set data type
     *
     * @param Fluent $column
     * @param array $elements
     * @return string
     */
    protected function typeSet(Fluent $column) {
        return "set('".implode("', '", $column->allowed)."')";
    }
}