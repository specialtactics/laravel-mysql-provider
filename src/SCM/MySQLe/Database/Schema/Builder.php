<?php namespace SCM\MySQLe\Database\Schema;

use \Illuminate\Database\Schema\MySqlBuilder;

class Builder extends MySqlBuilder {

    /**
     * Create a new command set with a Closure.
     *
     * @param  string   $table
     * @param  \Closure  $callback
     * @return \SCM\MySQLe\Database\Schema\Blueprint
     */
    protected function createBlueprint($table, \Closure $callback = null)
    {
        return new Blueprint($table, $callback);
    }

}
