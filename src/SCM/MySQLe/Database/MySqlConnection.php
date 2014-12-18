<?php namespace SCM\MySQLe\Database;

use Illuminate\Database\MySqlConnection as IMySqlConnection;

class MySqlConnection extends IMySqlConnection {

    /**
     * Get the default schema grammar instance.
     *
     * @return \SCM\MySQLe\Database\Schema\Grammars\Grammar
     */
    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new Schema\Grammars\MysqlGrammar);
    }

    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) { $this->useDefaultSchemaGrammar(); }

        return new Schema\Builder($this);
    }
}